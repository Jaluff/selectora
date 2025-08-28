import $ from 'jquery';
import 'datatables.net-bs5';
import 'datatables.net-bs5/css/dataTables.bootstrap5.css';
import { func } from 'prop-types';
// Simple status badge generator
function getStatusBadge(status) {
  let badgeClass = 'bg-label-secondary';
  let label = status;
  if (status === 'Nueva') {
    badgeClass = 'bg-label-info';
  } else if (status === 'Rechazada') {
    badgeClass = 'bg-label-danger';
  } else if (status === 'Trabajando') {
    badgeClass = 'bg-label-warning';
  }
  return `<span class="badge rounded-pill ${badgeClass}">${label}</span>`;
}

// $(document).ready(function () {
// INICIO FILTROS DINAMICOS //
function getOperatorsByType(type) {
  switch (type) {
    case 'text':
      return [
        { value: '=', text: 'Igual' },
        { value: 'like', text: 'Contiene' },
        { value: 'starts', text: 'Empieza con' },
        { value: 'ends', text: 'Termina con' }
      ];
    case 'date':
    case 'number':
      return [
        { value: '=', text: 'Igual' },
        { value: '>', text: 'Mayor que' },
        { value: '<', text: 'Menor que' },
        { value: 'between', text: 'Entre' }
      ];
    default:
      return [{ value: '=', text: 'Igual' }];
  }
}

// Renderiza operadores según el tipo
function renderOperators(row) {
  let type = row.find('.field option:selected').data('type');
  let operatorSelect = row.find('.operator');
  operatorSelect.empty();
  getOperatorsByType(type).forEach(op => {
    operatorSelect.append(`<option value="${op.value}">${op.text}</option>`);
  });
}

// Muestra u oculta el botón "quitar" según la cantidad de filas
function updateRemoveButtons() {
  const rows = $('.filter-row');
  if (rows.length === 1) {
    rows.find('.btn-remove').hide();
  } else {
    rows.find('.btn-remove').show();
  }
}

// Evento: cambia operadores al elegir campo
$(document).on('change', '.field', function () {
  let row = $(this).closest('.filter-row');
  renderOperators(row);
});

// Añadir fila de filtro
$('#add-filter').click(function () {
  let row = $('.filter-row:first').clone();
  row.find('input').val('');
  $('#dynamic-filters').append(row);
  renderOperators(row);
  updateRemoveButtons();
});

// Eliminar fila
$(document).on('click', '.btn-remove', function () {
  $(this).closest('.filter-row').remove();
  updateRemoveButtons();
});

// Inicializar operadores en la primera fila
renderOperators($('.filter-row:first'));
updateRemoveButtons();

$(document).ready(function () {
  const table = $('#employeesTable');
  console.log('Table element:', table.length); // Debería ser 1

  const url = $('#employeesTable').data('url');
  console.log('URL:', url); // Debería mostrar la ruta

  if (!table.length) {
    console.error('Table not found!');
    return;
  }

  const tableElement = $('#employeesTable');
  const imgBase = $('#employeesTable').data('img-base');
  const imgDefault = $('#employeesTable').data('img-default');
  console.log('DataTables URL:', $('#employeesTable').data('url'));
  try {
    const dataTable = tableElement.DataTable({
      processing: true,
      serverSide: true,
      ajax: {
        url: url,
        data: function (d) {
          d.filters = [];
          $('#dynamic-filters .filter-row').each(function () {
            d.filters.push({
              field: $(this).find('.field').val(),
              type: $(this).find('.field option:selected').data('type'),
              operator: $(this).find('.operator').val(),
              value: $(this).find('.value').val()
            });
          });
          return d;
        }
      },
      columns: [
        {
          data: 'id',
          name: 'id'
        },
        {
          data: 'foto',
          name: 'foto',
          render: function (data, type, row) {
            const src = data ? `${imgBase}/${data}` : imgDefault;
            const alt = row.nombre || 'Default Avatar';
            return `
          <img src="${src}" alt="${alt}" class="rounded" width="30"
            alt="{{ ${data} ? ${row.nombre} : 'Default Avatar' }}"
            class="rounded"
            width="40">
          `;
          }
        },
        { data: 'nombre', name: 'nombre' },
        { data: 'edad', name: 'edad' },
        { data: 'dni', name: 'dni' },
        {
          data: 'telefono',
          name: 'telefono',
          render: function (data, type, row) {
            const phone = data;
            const phone2 = row.telefono2;
            return `
            <span class="badge rounded-pill bg-label-secondary text-dark me-1 mb-1">${phone}</span><br>
            <span class="badge rounded-pill bg-label-warning text-dark me-1">${phone2}</span>
          `;
          }
        },
        {
          data: 'experiencia',
          name: 'experiencia'
        },
        {
          data: 'estado',
          name: 'estado',
          render: function (data) {
            return getStatusBadge(data);
          }
        },
        { data: 'action', name: 'action', orderable: false, searchable: false }
      ]
      // language: {
      // url: '/vendor/datatables/i18n/es-ES.json'
      // }
    });

    // Botón aplicar
    $('#apply-filters').click(function () {
      dataTable.draw();
    });
  } catch (e) {
    console.error('Error initializing DataTable:', e);
  }

  // FIN FILTROS DINAMICOS //
});

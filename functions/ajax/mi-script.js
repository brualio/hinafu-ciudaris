jQuery(document).ready(function($) {
  let postsPerPage = 4;  // Número de posts que se cargarán inicialmente
  let offset = 0;        // Offset inicial
  let totalPosts = 0;    // Número total de posts disponibles

  // Función para cargar posts
  function cargarPosts() {
      console.log('Cargando posts...');  // Depuración
      $.ajax({
          url: miAjax.ajaxurl,
          type: 'POST',
          data: {
              action: 'obtener_posts',
              security: miAjax.nonce,
              posts_per_page: postsPerPage,
              offset: offset
          },
          success: function(response) {
              console.log('Respuesta recibida:', response);  // Depuración
              
              // Asegurarse de que la respuesta sea un objeto JSON
              response = JSON.parse(response);
              
              // Insertar el HTML en el contenedor
              $('#postsContainer').append(response.html);

              // Actualizar el número total de posts
              totalPosts = response.total;
              
              // Actualizar el offset para la siguiente carga
              offset += postsPerPage;

              // Si ya no hay más posts, ocultar el botón
              if (offset >= totalPosts) {
                  $('#cargarPosts').hide();
              }
          },
          error: function(error) {
              console.log('Error en la solicitud AJAX:', error);  // Depuración
          }
      });
  }

  // Cargar los primeros posts cuando la página se carga
  cargarPosts();

  // Cargar más posts al hacer clic en el botón
  $('#cargarPosts').on('click', function() {
      postsPerPage = 2; // Cambia el número de posts a cargar por cada clic
      cargarPosts();
  });
});

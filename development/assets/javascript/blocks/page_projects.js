jQuery(document).ready(function($) {
  // Filter
  const CategoriaAllForm = $('#filter-g--prueba');
  const CategoriaSelectAll = $('.filter-g--cat');

  if (CategoriaAllForm.length && CategoriaSelectAll.length) {
    CategoriaSelectAll.on('change', function() {
      CategoriaAllForm.submit();
    });
  }

  CategoriaAllForm.on('submit', function(e) {
    e.preventDefault(); // Prevent the default form submission

    // Get values from the select elements
    const tax1Value = $('#distrito-proyecto').val();
    const tax2Value = $('#categoria-proyecto').val();
    
    // Construct the new URL
    let newUrl = window.location.origin + '/venta-departamentos/';
    if (tax1Value) {
      newUrl += encodeURIComponent(tax1Value) + '/';
    }
    
    if (tax2Value) {
      newUrl += '?categoria-proyecto=' + encodeURIComponent(tax2Value);
    }

    // Redirect to the new URL
    window.location.href = newUrl;
  });
});

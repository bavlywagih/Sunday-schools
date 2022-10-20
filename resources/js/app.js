import './bootstrap';

  tinymce.init({
    selector: '#post-editor',
    plugins: ['link', 'anchor', 'wordcount', 'code' , 'file image media' ,  'insertdatetime', 'table'],
    toolbar: 'undo redo | styles | bold italic  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent '
  });

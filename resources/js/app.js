import './bootstrap';

  tinymce.init({
    selector: '#post-editor',
    plugins: ['link', 'anchor', 'wordcount', 'code' , 'file image media' ,  'insertdatetime', 'table'],
    toolbar: 'undo redo | styles | bold italic  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent '
  });

//
// not-admin
anime({
  targets: '.row svg',
  translateY: 10,
  autoplay: true,
  loop: true,
  easing: 'easeInOutSine',
  direction: 'alternate'
});

anime({
  targets: '#zero',
  translateX: 10,
  autoplay: true,
  loop: true,
  easing: 'easeInOutSine',
  direction: 'alternate',
  scale: [{value: 1}, {value: 1.4}, {value: 1, delay: 250}],
    rotateY: {value: '+=180', delay: 200},
});




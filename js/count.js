// $('.counter').each(function() {
//   var $this = $(this),
//       countTo = $this.attr('data-count');
  
//   $({ countNum: $this.text()}).animate({
//     countNum: countTo
//   },

//   {

//     duration: 1000,
//     easing:'linear',
//     step: function() {
//       $this.text(Math.floor(this.countNum));
//     },
//     complete: function() {
//       $this.text(this.countNum);
//       //alert('finished');
//     }

//   });  
  
  

// });

$(window).scroll(function(){
  $bg_kelas = $(".bg-kelas");
  $nav = $(".bg-menu").outerHeight();
  $bg_kelasOffset = $bg_kelas.offset().top - $nav;
  $windowScroll = $(window).scrollTop();
  if ($windowScroll > $bg_kelasOffset) {
    $('.counter').each(function() {
    var $this = $(this),
        countTo = $this.attr('data-count');
    
    $({ countNum: $this.text()}).animate({
      countNum: countTo
    },

    {

      duration: 2000,
      easing:'linear',
      step: function() {
        $this.text(Math.floor(this.countNum));
      },
      complete: function() {
        $this.text(this.countNum);
        //alert('finished');
      }

    });  
    
    

  });
  }
});
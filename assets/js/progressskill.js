$(document).on('scroll', function() {
//    $(window).scroll(function() {
      var oTop = $('#cpp').offset().top - window.innerHeight + 90;
      var pTop = $('body').scrollTop();
//      console.log(pTop + " > " + oTop);
      if(pTop > oTop)
      {
        $(document).off('scroll');
        loadTheProgressBar();
      }
});

function loadTheProgressBar () {
  var html5 = new ProgressBar.Circle('#html5', {
    color: '#F16529',
    trailColor: '#3E4249',
    trailWidth: 1,
    duration: 1700,
    easing: 'bounce',
    strokeWidth: 8,
    from: {color: '#FFEA82', a:0},
    to: {color: '#F16529', a:1},
    // Set default step function for all animate calls
    step: function(state, circle) {
      circle.path.setAttribute('stroke', state.color);
      var value = Math.round(circle.value() * 100);
      if (value === 0) {
        circle.setText('');
      } else {
//        circle.setText(value + '%');
        circle.setText('Expert');
      }
    }
  });
  html5.animate(0.9);

  var css3 = new ProgressBar.Circle('#css3', {
    color: '#056CB6',
    trailColor: '#3E4249',
    trailWidth: 1,
    duration: 1700,
    easing: 'bounce',
    strokeWidth: 8,
    from: {color: '#FFEA82', a:0},
    to: {color: '#056CB6', a:1},
    // Set default step function for all animate calls
    step: function(state, circle) {
      circle.path.setAttribute('stroke', state.color);
      var value = Math.round(circle.value() * 100);
      if (value === 0) {
        circle.setText('');
      } else {
        // circle.setText(value + '%');
        circle.setText('Proficient');
      }
    }
  });
  css3.animate(0.85);  // Number from 0.0 to 1.0

  var javascript = new ProgressBar.Circle('#javascript', {
    color: '#F3D239',
    trailColor: '#3E4249',
    trailWidth: 1,
    duration: 1700,
    easing: 'bounce',
    strokeWidth: 8,
    from: {color: '#FFEA82', a:0},
    to: {color: '#F3D239', a:1},
    // Set default step function for all animate calls
    step: function(state, circle) {
      circle.path.setAttribute('stroke', state.color);
      var value = Math.round(circle.value() * 100);
      if (value === 0) {
        circle.setText('');
      } else {
        // circle.setText(value + '%');
        circle.setText('Proficient');
      }
    }
  });
  javascript.animate(0.8);  // Number from 0.0 to 1.0

  var angular = new ProgressBar.Circle('#angular', {
    color: '#D32F2E',
    trailColor: '#3E4249',
    trailWidth: 1,
    duration: 1700,
    easing: 'bounce',
    strokeWidth: 8,
    from: {color: '#FFEA82', a:0},
    to: {color: '#D32F2E', a:1},
    // Set default step function for all animate calls
    step: function(state, circle) {
      circle.path.setAttribute('stroke', state.color);
      var value = Math.round(circle.value() * 100);
      if (value === 0) {
        circle.setText('');
      } else {
        // circle.setText(value + '%');
        circle.setText('Prior\nexp');
      }
    }
  });
  angular.animate(0.65);  // Number from 0.0 to 1.0

  var java = new ProgressBar.Circle('#java', {
    color: '#FFFFFF',
    trailColor: '#3E4249',
    trailWidth: 1,
    duration: 1700,
    easing: 'bounce',
    strokeWidth: 8,
    from: {color: '#3E4249', a:0},
    to: {color: '#FFFFFF', a:1},
    // Set default step function for all animate calls
    step: function(state, circle) {
      circle.path.setAttribute('stroke', state.color);
      var value = Math.round(circle.value() * 100);
      if (value === 0) {
        circle.setText('');
      } else {
//        circle.setText(value + '%');
        circle.setText('Proficient');
      }
    }
  });
  java.animate(0.8);  // Number from 0.0 to 1.0

  var cpp = new ProgressBar.Circle('#cpp', {
    color: '#000000',
    trailColor: '#3E4249',
    trailWidth: 1,
    duration: 1700,
    easing: 'bounce',
    strokeWidth: 8,
    from: {color: '#3E4249', a:0},
    to: {color: '#000000', a:1},
    // Set default step function for all animate calls
    step: function(state, circle) {
      circle.path.setAttribute('stroke', state.color);
      var value = Math.round(circle.value() * 100);
      if (value === 0) {
        circle.setText('');
      } else {
        // circle.setText(value + '%');
        circle.setText('Proficient');
      }
    }
  });
  cpp.animate(0.8);  // Number from 0.0 to 1.0

  var php = new ProgressBar.Circle('#php', {
    color: '#BF00FE',
    trailColor: '#3E4249',
    trailWidth: 1,
    duration: 1700,
    easing: 'bounce',
    strokeWidth: 8,
    from: {color: '#056CB6', a:0},
    to: {color: '#BF00FE', a:1},
    // Set default step function for all animate calls
    step: function(state, circle) {
      circle.path.setAttribute('stroke', state.color);
      var value = Math.round(circle.value() * 100);
      if (value === 0) {
        circle.setText('');
      } else {
//        circle.setText(value + '%');
        php.setText('Prior\nexp');
      }
    }
  });
  php.animate(0.65);  // Number from 0.0 to 1.0

  var mysql = new ProgressBar.Circle('#mysql', {
    color: '#51A900',
    trailColor: '#3E4249',
    trailWidth: 1,
    duration: 1700,
    easing: 'bounce',
    strokeWidth: 8,
    from: {color: '#FFEA82', a:0},
    to: {color: '#51A900', a:1},
    // Set default step function for all animate calls
    step: function(state, circle) {
      circle.path.setAttribute('stroke', state.color);
      var value = Math.round(circle.value() * 100);
      if (value === 0) {
        circle.setText('');
      } else {
        // circle.setText(value + '%');
        circle.setText('Prior\nexp');
      }
    }
  });
  mysql.animate(0.65);  // Number from 0.0 to 1.0

}

let currentPage = 1;
let selectedOptions = [];
let depressionLevel = 'Low Level'
const items = document.querySelectorAll('.item');

function showPage(pageNumber) {
  $(".radio-error-msg").addClass("d-none");
    items.forEach((item, index) => {
        if (index + 1 === pageNumber) {
          item.classList.remove('hidden');
        } else {
            item.classList.add('hidden');
        }
    });
}

function nextPage() {
  let hasLRN = true;
  let lrnId = $("#lrn_input");
  let invalidIrnMsgId = $("#invalid_lrn_msg");

  if (lrnId.val().length < 12) 
  {
    invalidIrnMsgId.removeClass("d-none");
    hasLRN = false;
  }

  if(hasLRN)
  {
    invalidIrnMsgId.addClass("d-none");

    if (currentPage <= 21) {
      let radiobutton = currentPage - 1;
      let hasChecked = true
      if(radiobutton != 0)
      {
        if (!$("input[name='radio"+radiobutton+"']:checked").length > 0) {
          // Remove d-none class from p tag with class radio-error-msg
          $(".radio-error-msg").removeClass("d-none");
          hasChecked = false
        }
        else
        {
          recordSelectedOption (radiobutton);
        }
      }

      if(hasChecked)
      { 
        currentPage++; 

        if(currentPage > 21)
        {
          calculateAssessment();
        }
      
        showPage(currentPage); 
        
      }
    }
  }

}

function previousPage() {
    if (currentPage > 1) {
        currentPage--;

        if (selectedOptions.length > 0) {
          selectedOptions.pop(); // Removes the last element from the array
        } 
        showPage(currentPage);
    }
}

function recordSelectedOption (radiobutton)
{
  if (selectedOptions.length < 20)
  {
    let optionValue = $("input[name='radio"+radiobutton+"']:checked").val();
    let integerOptionValue = parseInt(optionValue, 10);
    selectedOptions.push(integerOptionValue);
    console.log(selectedOptions);
  }
  
}

function calculateAssessment ()
{
    console.log(selectedOptions);
    // Calculate the sum of ratings
    const sum = selectedOptions.reduce((acc, selectedOptions) => acc + selectedOptions, 0);

    // Calculate the mean
    const mean = sum / selectedOptions.length;

    // Output the mean
    console.log('Mean Rating:', mean);

    // Use the update method to modify the series options

    const chart = Highcharts.charts[0];
    if (chart && !chart.renderer.forExport) {
        const point = chart.series[0].points[0],
            inc = mean;

            $('.highcharts-description').text("The individual displays signs of emotional well-being and does not exhibit any indications of depression.");
            $('#main-recommendation').text("Normal")
            if(inc > 1.99)
            {
              depressionLevel = 'Moderate Level';
              $('#main-recommendation').text("Needs counseling and therapy.")
              $('.highcharts-description').text("Recommends seeking counseling and therapeutic intervention to address and navigate personal challenges and emotional well-being.");
            }

            if(inc > 3.99)
            {
              depressionLevel = 'High Level';
              $('#main-recommendation').text("Needs professional help such as medication and therapy.")
              $('.highcharts-description').text("Requires the assistance of qualified professionals, including prescribed medication and psychological therapy, to effectively address and manage the underlying issues affecting mental health. Seeking comprehensive treatment from medical and mental health experts is recommended for optimal support and recovery.");
            }

        //const chartFormat = chart.series[0].userOptions.dataLabels.format,
        const chartFormatLevel = '{y} '+depressionLevel;

        chart.series[0].update({
          dataLabels: {
              format: chartFormatLevel
          }
        });

        $("#container").removeClass("d-none");

        // Introduce a delay of 2 seconds (2000 milliseconds) before calling calculateAssessment
        setTimeout(function() {
        point.update(mean);
        }, 500);
    }
}

function validateInput() {
let inputField = document.getElementById('lrn_input');

let inputValue = inputField.value;

// Remove non-numeric characters
let numericValue = inputValue.replace(/\D/g, '');

// Limit to 12 digits
numericValue = numericValue.substring(0, 12);

// Update the input field
inputField.value = numericValue;
}

//Chart Calculations
Highcharts.chart('container', {

  chart: {
      type: 'gauge',
      plotBackgroundColor: null,
      plotBackgroundImage: null,
      plotBorderWidth: 0,
      plotShadow: false,
      height: '80%'
  },

  title: {
      text: 'Depression Level'
  },

  pane: {
      startAngle: -90,
      endAngle: 89.9,
      background: null,
      center: ['50%', '75%'],
      size: '110%'
  },

  // the value axis
  yAxis: {
      min: 1,
      max: 5,
      tickPixelInterval: 72,
      tickPosition: 'inside',
      tickColor: Highcharts.defaultOptions.chart.backgroundColor || '#FFFFFF',
      tickLength: 20,
      tickWidth: 2,
      minorTickInterval: null,
      labels: {
          distance: 20,
          style: {
              fontSize: '14px'
          }
      },
      lineWidth: 0,
      plotBands: [{
          from: 0,
          to: 2,
          color: '#55BF3B', // green
          thickness: 20
      }, {
          from: 2,
          to: 3,
          color: '#DDDF0D', // yellow
          thickness: 20
      }, {
          from: 3,
          to: 4,
          color: '#FF4500', // orange
          thickness: 20
      }, {
        from: 4,
        to: 5,
        color: '#EC0D00', // red
        thickness: 20
    }]
  },

  series: [{
      name: 'Depression Level',
      data: [1],
      tooltip: {
          valueSuffix: ' ' + depressionLevel
      },
      dataLabels: {
          format: '{y} ' + depressionLevel,
          borderWidth: 0,
          color: (
              Highcharts.defaultOptions.title &&
              Highcharts.defaultOptions.title.style &&
              Highcharts.defaultOptions.title.style.color
          ) || '#333333',
          style: {
              fontSize: '16px'
          }
      },
      dial: {
          radius: '80%',
          backgroundColor: 'gray',
          baseWidth: 12,
          baseLength: '0%',
          rearLength: '0%'
      },
      pivot: {
          backgroundColor: 'gray',
          radius: 6
      }

  }]

});


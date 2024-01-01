let currentPage = 1;
let selectedOptions = [];
let depressionLevel = 'Low Level'
var totalLevel = 0;
const items = document.querySelectorAll('.item');
// Create a new Date object
var currentDate = new Date();
// Get various components of the current date
var year = currentDate.getFullYear();
var month = currentDate.getMonth() + 1; // Months are zero-based, so add 1
var day = currentDate.getDate();
var hours = currentDate.getHours();
var minutes = currentDate.getMinutes();
var seconds = currentDate.getSeconds();

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
        $("#SummaryContent").slideUp();
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
    console.log(`Question: ${radiobutton} - Selected: ${optionValue}`);
  }
}

function calculateAssessment ()
{
    console.log(selectedOptions);
    // Calculate the sum of ratings
    const sum = selectedOptions.reduce((acc, selectedOptions) => acc + selectedOptions, 0);

    // Calculate the mean
    const mean = sum / selectedOptions.length;

    totalLevel = mean;

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
        const tooltipFormat = ' ' + depressionLevel;

        chart.series[0].update({
          tooltip: {
            valueSuffix: tooltipFormat
          },
          dataLabels: {
              format: chartFormatLevel
          }
        });

        $("#container").removeClass("d-none");

        // Introduce a delay of 2 seconds (2000 milliseconds) before calling calculateAssessment
        setTimeout(function() {
        point.update(mean);
        }, 500);

        CalculateSummary(selectedOptions.length);
        countTotalSelectedOptions(selectedOptions)
    }
}

function CalculateSummary(ArrLength) {
  let SumNo = 1;
  for (let i=0; i < ArrLength; i++)
  {
    let SummaryOfSelectedOption = 'Strongly Disagree';

    if(selectedOptions[i] == 2)
    {
      SummaryOfSelectedOption = 'Disagree'
    }
    else if(selectedOptions[i] == 3)
    {
      SummaryOfSelectedOption = 'Neutral'
    }
    else if(selectedOptions[i] == 4)
    {
      SummaryOfSelectedOption = 'Agree'
    }
    else if(selectedOptions[i] == 5)
    {
      SummaryOfSelectedOption = 'Strongly Agree'
    }

    $(`#summary-${SumNo}`).text(SummaryOfSelectedOption);
    console.log(`Summary: ${SumNo} = ${SummaryOfSelectedOption}`);
    SumNo++;

    $("#SummaryContent").slideDown();
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

function countTotalSelectedOptions(array)
{
  var counts = {};

  $.each(array, function(index, value) {
      if (counts[value] === undefined) {
          counts[value] = 1;
      } else {
          counts[value]++;
      }
  });

  // Display the counts
  $.each(counts, function(key, value) {
      console.log(key + ": " + value);

      if(key == 1)
      {
        $("#total_s_disagree").text(`${value} Total`);
      }

      if(key == 2)
      {
        $("#total_disagree").text(`${value} Total`);
      }

      if(key == 3)
      {
        $("#total_neutral").text(`${value} Total`);
      }

      if(key == 4)
      {
        $("#total_Agree").text(`${value} Total`);
      }

      if(key == 5)
      {
        $("#total_s_Agree").text(`${value} Total`);
      }
  });
}

function changeAnswers()
{
  previousPage()

  $("#reSub").removeClass("d-none");
  $("#newSub").addClass("d-none");
}

function reSubmit()
{
  nextPage()
}

function newSubmit()
{
  nextPage()
}

function printSummary()
{
 
  var props = {
    outputType: jsPDFInvoiceTemplate.OutputType.Save,
    returnJsPDFDocObject: true,
    fileName: "Assessment Summary "+ year + '-' + month + '-' + day,
    orientationLandscape: false,
    compress: true,
    logo: {
        src: "https://scontent.fdvo2-1.fna.fbcdn.net/v/t31.18172-8/291679_271762202845058_1322743400_o.jpg?_nc_cat=108&ccb=1-7&_nc_sid=7a1959&_nc_eui2=AeF9hVf97w8wxUk-oQkoT9KW_v3hfJXJpsb-_eF8lcmmxtrF2JbYDUAU_scJa7MpkovmvxYIN_iO9GK3dBffkynH&_nc_ohc=7CorEUgH7kYAX84C79u&_nc_ht=scontent.fdvo2-1.fna&oh=00_AfBgd9wlWCyqlA3ynCNMsSsY9dis910rQw4xbYO_PCKxPg&oe=65BA68DB",
        type: 'PNG', //optional, when src= data:uri (nodejs case)
        width: 26.66, //aspect ratio = width/height
        height: 26.66,
        margin: {
            top: 0, //negative or positive num, from the current position
            left: 0 //negative or positive num, from the current position
        }
    },
    business: {
        name: "LRN: " + $('#lrn_input').val() ,
          address: `Assessment Score: ${totalLevel}`,
          phone:  `Depression Level: ${depressionLevel}`,
          email: 'Assessment Date: ' + year + '-' + month + '-' + day,
    },
    invoice: {
        headerBorder: false,
        tableBodyBorder: false,
        header: [
          { 
            title: "Assessment Questions",
            style: {
              width: 130
            } 
          }, 
          { 
            title: "Selected Options",
            style: {
              width: 50
            } 
          }
        ],
        table: Array.from(Array(20), (item, index)=>(
          [
            $(`#t-${index+1}`).text(),
            $(`#summary-${index+1}`).text(),
        ])),
        invDescLabel: $('#main-recommendation').text() + '\n',
        invDesc: $(".highcharts-description").text(),
    },
    footer: {
        text: "Depression Assessment Questionnaire",
    },
    pageEnable: true,
    pageLabel: "Page ",
  };

  //or in browser
  var pdfObject = jsPDFInvoiceTemplate.default(props); //returns number of pages created
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


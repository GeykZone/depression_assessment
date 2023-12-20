let currentPage = 1;
let selectedOptions = [];
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
        if(currentPage < 22)
        {
          showPage(currentPage);
        }
        else
        {
          currentPage--;
          calculateAssessment ();  
        }
        
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

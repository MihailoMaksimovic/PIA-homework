var score_table = document.getElementById("results");
var arrayScore = [];
var firstTenArrayScore = [];
var stringComparison;
function markupResults() {
  var itemKey;
  var values;
  for (let i = 0; i < localStorage.length; i++) {
    itemKey = localStorage.key(i);
    values = localStorage.getItem(itemKey);
    arrayScore[i] = [itemKey, values];
  }

  for (let i = 0; i < arrayScore.length; i++) {
    for (let j = i + 1; j < arrayScore.length - 1; j++) {
      if ((arrayScore[i][1] = arrayScore[j][1])) {
        string1 = arrayScore[i][0];
        string2 = arrayScore[j][0];
        stringComparison = string1.localeCompare(string2);
        if (stringComparison > 0) {
          temp = arrayScore[j];
          arrayScore[j] = arrayScore[i];
          arrayScore[i] = temp;
        }
      }
      if (arrayScore[i][1] < arrayScore[j][1]) {
        temp = arrayScore[j];
        arrayScore[j] = arrayScore[i];
        arrayScore[i] = temp;
      }
    }
  }

  for (let i = 0; i < 10; i++) {
    firstTenArrayScore[i] = arrayScore[i];
  }

  console.log(arrayScore.length);
  console.log(arrayScore[0]);

  const markup = `
   <ul  class="items">
   ${firstTenArrayScore
     .map(
       (item) =>
         ` ${item} <br>

    
`
     )
     .join("")}
                
         </ul>
    
    `;

  score_table.innerHTML = markup;
}

markupResults();

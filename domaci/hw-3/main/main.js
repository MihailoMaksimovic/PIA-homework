var myQuestions = [];
var timerValue = 20;
var gameOver = 0;

var numberOfAnswer = 0;

fetch("./base.json")
  .then(function (response) {
    return response.json();
  })
  .then(function (data) {
    myQuestions = data;
    const quizContainer = document.getElementById("quiz");
    const resultsContainer = document.getElementById("results");

    function buildQuiz() {
      // variable to store the HTML output
      const output = [];

      var start = Date.now();
      function myTimer() {
        var delta = Date.now() - start; // milliseconds elapsed since start
        document.getElementById("timer").innerHTML = timerValue;
        timerValue = timerValue - 1;
        if (gameOver == 1) {
          myStopFunction();
        }
        if (timerValue == -1) {
          if (gameOver == 0) {
            showNextSlide();
          }
        }
      }

      function myStopFunction() {
        clearInterval(myVar);
        timerValue = "Keep it up!";
        document.getElementById("timer").innerHTML = timerValue;
        localStorage.setItem("lastname", "Smith");
      }

      var myVar = setInterval(myTimer, 1000);

      // for each question...
      myQuestions.forEach((currentQuestion, questionNumber) => {
        // variable to store the list of possible answers
        const answers = [];
        if (currentQuestion.type == "radio") {
          // and for each available answer...
          for (letter in currentQuestion.answers) {
            // ...add an HTML radio button
            answers.push(
              `<label>
                <input type="radio" name="question ${questionNumber}" value="${letter}">
                ${letter} :
                ${currentQuestion.answers[letter]}
              </label>`
            );
          }

          // add this question and its answers to the output
          output.push(
            `<div class="slide">
              <div id="question ${numberOfAnswer}" class="question"> ${
              currentQuestion.question
            } </div>
              <div class="answers"> ${answers.join("")} </div>
          </div>`
          );
        } else {
          // and for each available answer...
          // ...add an HTML radio button
          answers.push(
            `<label>
                <input type="input" >
              </label>`
          );

          // add this question and its answers to the output
          output.push(
            `<div class="slide">
              <div class="question"> ${currentQuestion.question} </div>
              <div class="answers"> ${answers.join("")} </div>
          </div>`
          );
        }

        // if (
        //   document.getElementsByName("question").values ==
        //   currentQuestion.correctAnswer
        // ) {
        //   const questions = document.getElementsByClassName(".question");
        //   questions[questionNumber].style.color = "lightgreen";
        //   await;
        // } else {
        //   questions = document.getElementsByClassName(".question");
        //   questions.style = "red";
        // }
      });

      // finally combine our output list into one string of HTML and put it on the page
      quizContainer.innerHTML = output.join("");
    }

    // display quiz right away
    buildQuiz();

    const nextButton = document.getElementById("next");
    const submitButton = document.getElementById("submit");
    const slides = document.querySelectorAll(".slide");
    const answerContainers = quizContainer.querySelectorAll(".answers");
    const answerContainer = answerContainers[numberOfAnswer];

    var currentSlide = 0;

    function showNextSlide() {
      var rates = document.getElementsByName("question" + " " + numberOfAnswer);
      var rate_value;
      for (var i = 0; i < rates.length; i++) {
        if (rates[i].checked) {
          rate_value = rates[i].value;
        }
      }
      console.log("question" + " " + numberOfAnswer);
      console.log(rate_value);
      console.log(myQuestions[numberOfAnswer].correctAnswer);

      if (rate_value == myQuestions[numberOfAnswer].correctAnswer) {
        // document.getElementById("quiz-container").style.backgroundColor =
        //   "rgb(0, 75, 0)";
        answerContainers[numberOfAnswer].style.color = "lightgreen";
      } else {
        // document.getElementById("quiz-container").style.backgroundColor = "red";
        answerContainers[numberOfAnswer].style.color = "red";
      }
      console.log(numberOfAnswer);
      if (gameOver == 0) {
        timerValue = 20;
        numberOfAnswer += 1;
      }

      showSlide(currentSlide + 1);
    }

    // on submit, show results

    function showSlide(n) {
      slides[currentSlide].classList.remove("active-slide");
      slides[n].classList.add("active-slide");
      currentSlide = n;

      if (currentSlide === slides.length - 1) {
        nextButton.style.display = "none";
        submitButton.style.display = "inline-block";
        gameOver = 1;
      } else {
        nextButton.style.display = "inline-block";
        submitButton.style.display = "none";
      }
    }

    showSlide(currentSlide);

    nextButton.addEventListener("click", showNextSlide);
    submitButton.addEventListener("click", function () {
      window.location.replace("../results/results.html");
    });
  });

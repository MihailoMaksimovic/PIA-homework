var myQuestions = [];
var timerValue = 20;
var gameOver = 0;
var player_score = 0;
var player_name;
var numberOfAnswer = 0;
var inputNumber = 0;

fetch("./base.json")
  .then(function (response) {
    return response.json();
  })
  .then(function (data) {
    myQuestions = data;
    const quizContainer = document.getElementById("quiz");
    const resultsContainer = document.getElementById("results");

    document.getElementById("next").style.visibility = "visible";
    document.getElementById("quit").style.visibility = "visible";
    document.getElementById("submit").style.visibility = "visible";

    function buildQuiz() {
      const output = [];

      var start = Date.now();
      function myTimer() {
        var delta = Date.now() - start;
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
        timerValue = "Write your name and see are you in top ten!!!";
        document.getElementById("timer").innerHTML = timerValue;
        const playerInput = `<label>
              <input  type="input" id="player_name" >
            </label>`;
        document.getElementById("quiz").innerHTML = playerInput;
      }

      var myVar = setInterval(myTimer, 1000);

      myQuestions.forEach((currentQuestion, questionNumber) => {
        const answers = [];
        if (currentQuestion.type == "radio") {
          for (letter in currentQuestion.answers) {
            answers.push(
              `<label>
                <input type="radio" name="question ${questionNumber}" value="${letter}">
                ${letter} :
                ${currentQuestion.answers[letter]}
              </label>`
            );
          }

          output.push(
            `<div class="slide">
              <div id="question ${numberOfAnswer}" class="question"> ${
              currentQuestion.question
            } </div>
              <div class="answers"> ${answers.join("")} </div>
          </div>`
          );
        } else {
          answers.push(
            `<label>
                <input id="input ${inputNumber}" type="input" >
              </label>`
          );

          output.push(
            `<div class="slide">
              <div class="question"> ${currentQuestion.question} </div>
              <div class="answers"> ${answers.join("")} </div>
          </div>`
          );
          inputNumber += 1;
        }
      });

      quizContainer.innerHTML = output.join("");
    }

    buildQuiz();

    const nextButton = document.getElementById("next");
    const quitButton = document.getElementById("quit");
    const submitButton = document.getElementById("submit");
    const slides = document.querySelectorAll(".slide");
    const answerContainers = quizContainer.querySelectorAll(".answers");
    const answerContainer = answerContainers[numberOfAnswer];

    var currentSlide = 0;

    function showNextSlide() {
      document.getElementById("next").disabled = true;
      var inputBox1 = document.getElementById("input" + " " + 0).value;
      var inputBox2 = document.getElementById("input" + " " + 1).value;
      var checkBox = document.getElementsByName(
        "question" + " " + numberOfAnswer
      );
      var checkBoxAnswer;
      for (var i = 0; i < checkBox.length; i++) {
        if (checkBox[i].checked) {
          checkBoxAnswer = checkBox[i].value;
        }
      }
      console.log("pitanje:   " + numberOfAnswer);

      console.log("broj odgovorra:  " + numberOfAnswer);
      console.log("input1:   " + inputBox1);
      console.log("input2:   " + inputBox2);
      console.log("odgovor:  " + myQuestions[numberOfAnswer].correctAnswer);

      if (numberOfAnswer == 4) {
        if (inputBox1 == myQuestions[numberOfAnswer].correctAnswer) {
          player_score += 1;
          answerContainers[numberOfAnswer].style.backgroundColor = "lightgreen";
        } else {
          answerContainers[numberOfAnswer].style.backgroundColor = "red";
        }
      }
      if (numberOfAnswer == 6) {
        if (inputBox2 == myQuestions[numberOfAnswer].correctAnswer) {
          player_score += 1;
          answerContainers[numberOfAnswer].style.backgroundColor = "lightgreen";
        } else {
          answerContainers[numberOfAnswer].style.backgroundColor = "red";
        }
      } else {
        if (checkBoxAnswer == myQuestions[numberOfAnswer].correctAnswer) {
          player_score += 1;
          answerContainers[numberOfAnswer].style.color = "lightgreen";
        } else {
          answerContainers[numberOfAnswer].style.color = "red";
        }
      }
      console.log("rezultat:   " + player_score);
      if (gameOver == 0) {
        timerValue = 20;
        numberOfAnswer += 1;
      }

      showSlide(currentSlide + 1);
    }

    function showSlide(n) {
      setTimeout(() => {
        document.getElementById("next").disabled = false;
        slides[currentSlide].classList.remove("active-slide");
        slides[n].classList.add("active-slide");
        currentSlide = n;

        if (currentSlide === slides.length - 1) {
          nextButton.style.display = "none";
          quitButton.style.display = "none";
          submitButton.style.display = "inline-block";
          gameOver = 1;
        } else {
          nextButton.style.display = "inline-block";
          quitButton.style.display = "inline-block";
          submitButton.style.display = "none";
        }
      }, 1000);
    }

    showSlide(currentSlide);

    nextButton.addEventListener("click", showNextSlide);
    quitButton.addEventListener("click", function () {
      nextButton.style.display = "none";
      quitButton.style.display = "none";
      submitButton.style.display = "inline-block";
      gameOver = 1;
    });
    submitButton.addEventListener("click", function () {
      player_name = document.getElementById("player_name");

      if (localStorage.getItem(player_name.value) === null) {
        window.localStorage.setItem(player_name.value, player_score);
        player_score = 0;
        window.location.replace("../results/results.html");
      } else {
        alert("name alredy exist");
      }
    });
  });

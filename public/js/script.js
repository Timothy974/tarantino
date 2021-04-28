
class Question {
    constructor(text, choices, answer) {
      this.text = text;
      this.choices = choices;
      this.answer = answer;
    }
    isCorrectAnswer(choice) {
      return this.answer === choice;
    }
  }
  let questions = [
    new Question("Dans Reservoir Dogs, quel est le nom de code du policier infiltré", ["M. White", "M. Pink", "M. Brown", "M. Orange"], "M. Orange"),
    new Question("Dans Pulp Fiction, que doit récupérer Butch dans son appartement", ["Son passport","L'argent de son coffre", "La montre de son pére", "Son arme"], "La montre de son pére"),
    new Question("Dans Jackie Brown, quel groupe Jackie fait découvrir à Max", ["The Grass Roots ","The Delfonics ", "Bloodstone ", "Bobby Womack "], "The Delfonics "),
    new Question("Dans Kill Bill vol.1, quel est le nom de code de Beatrix Kiddo", ["Mocassin d'eau","Vipère Cuivrée", "Serpent de Montagne", "Black Mamba"], "Black Mamba"),
    new Question("Dans Kill Bill vol.2, qui entraîne Beatrix pendant plusieurs années", ["Paï Meï","Hattori Hanzo", "Maï Taï", "Leï Weï"], "Paï Meï"),
    new Question("Dans Boulevar de la mort, quel voiture mythique rêve de conduire Zoé Bell", ["Dodge Challenger 1970","Chevrolet Nova 1971", "Dodge Charger de 1969", "Ford Mustang 1972"], "Dodge Challenger 1970"),
    new Question("Dans Inglourious Basterds, qu'est ce que le lieutenant Aldo Raine exige que lui rapporte tous ses soldats ", ["Les oreilles de leurs ennemis","Les yeux de leurs ennemis", "Les scalpes de leurs ennemis", "Les couilles de leurs ennemis"], "Les scalpes de leurs ennemis"),
    new Question("Dans Django, quel est le nom de la première prime de Django Freeman", ["Les fréres Breetle","Le gang des daltons", "Les fréres Candy", "Le gang de Stevie Bacall"], "Le gang de Stevie Bacall"),
    new Question("Dans les huits salopards, de quel president le major Marquis Warren dit posséder une lettre adressée à lui", ["Lincoln","Washington", "Jefferson", "Roosvelt"], "Lincoln"),
    new Question("Dans Once upon a time in hollywood, de qui Rick Dalton est il le voisin", ["F.F Coppola","Quentin Tarantino", "Roman Polanski", "Marlon Brando"], "Roman Polanski"),
  ];
  
 
  
  class Quiz {
    constructor(questions) {
      this.score = 0;
      this.questions = questions;
      this.currentQuestionIndex = 0;
    }
    getCurrentQuestion() {
      return this.questions[this.currentQuestionIndex];
    }
    guess(answer) {
      if (this.getCurrentQuestion().isCorrectAnswer(answer)) {
        this.score++;
      }
      this.currentQuestionIndex++;
    }
    hasEnded() {
      return this.currentQuestionIndex >= this.questions.length;
    }
  }
  
  // Regroup all  functions relative to the App Display
  const display = {
    elementShown: function(id, text) {
      let element = document.getElementById(id);
      element.innerHTML = text;
    },
    endQuiz: function() {
      endQuizHTML = `
        <h1>Quiz terminé !</h1>
        <h3> Votre score est de : ${quiz.score} / ${quiz.questions.length}</h3>`;
      this.elementShown("quiz", endQuizHTML);
    },
    question: function() {
      this.elementShown("question", quiz.getCurrentQuestion().text);
    },
    choices: function() {
      let choices = quiz.getCurrentQuestion().choices;
  
      guessHandler = (id, guess) => {
        document.getElementById(id).onclick = function() {
          quiz.guess(guess);
          quizApp();
        }
      }
      // display choices and handle guess
      for(let i = 0; i < choices.length; i++) {
        this.elementShown("choice" + i, choices[i]);
        guessHandler("guess" + i, choices[i]);
      }
    },
    progress: function() {
      let currentQuestionNumber = quiz.currentQuestionIndex + 1;
      this.elementShown("progress", "Question " + currentQuestionNumber + " sur " + quiz.questions.length);
    },
  };
  
  // Game logic
  quizApp = () => {
    if (quiz.hasEnded()) {
      display.endQuiz();
    } else {
      display.question();
      display.choices();
      display.progress();
    } 
  }
  // Create Quiz
  let quiz = new Quiz(questions);
  quizApp();
  

  
  

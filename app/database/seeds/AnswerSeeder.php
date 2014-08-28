<?php

class AnswerSeeder extends Seeder {

  public function run()
  {
    $answers = [
      "Yes.",
      "Yes - definitely.",
      "Reply hazy, try again...",
      "Without a doubt.",
      "My sources say no.",
      "As I see it, yes.",
      "You may rely on it.",
      "Concentrate and ask again...",
      "Outlook not so good.",
      "It is decidedly so.",
      "Better not tell you now...",
      "Very doubtful...",
      "It is certain.",
      "Cannot predict now...",
      "Most likely...",
      "Ask again later...",
      "My reply is no.",
      "Outlook good.",
      "Don't count on it."
    ];

    foreach ($answers as $answer) {
      Answer::create(array('body' => $answer));
    }
  }

}
<?php
// 
// Copyright (c) 2011, Beaconsfield IT
// All rights reserved.
//
// This software was manufactured for Leading Potential (hereinafter The Company), 
// any use by The Company is acceptable, even excluding the conditions of this license.
// 
// Redistribution and use in source and binary forms, with or without
// modification, are permitted provided that the following conditions are met:
//     * Redistributions of source code must retain the above copyright
//       notice, this list of conditions and the following disclaimer.
//     * Redistributions in binary form must reproduce the above copyright
//       notice, this list of conditions and the following disclaimer in the
//       documentation and/or other materials provided with the distribution.
//     * Neither the name of the Beaconsfield IT nor the
//       names of its contributors may be used to endorse or promote products
//       derived from this software without specific prior written permission.
//     * And; This software may not be redistributed and sold under 
//       any condition, even meeting the prior criteria(s).
//     * All advertising materials mentioning features or use of this software
//       must display the following acknowledgement:
//       This product includes software developed by Beaconsfield IT.
// 
// THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
// ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
// WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
// DISCLAIMED. IN NO EVENT SHALL BEACONSFIELD IT BE LIABLE FOR ANY
// DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
// (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
// LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
// ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
// (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
// SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
//

/// Module One Template
/// © 2011 Beaconsfield IT - Created 31 August 2011 by Aidan Cornelius-Bell

// Module Information

$groups_of_questions = 4;
$question_evaluation_set1 = array("q1" => 2, "q2" => 7, "q3" => 9, "q4" => 17, "q5" => 18, "q6" => 21, "q7" => 27);
$question_evaluation_set2 = array("q1" => 1, "q2" => 3, "q3" => 11, "q4" => 13, "q5" => 22, "q6" => 28);
$question_evaluation_set3 = array("q1" => 12, "q2" => 14, "q3" => 19, "q4" => 20, "q5" => 23, "q6" => 24, "q7" => 29);
$question_evaluation_set4 = array("q1" => 4, "q2" => 5, "q3" => 6, "q4" => 8, "q5" => 10, "q6" => 15, "q7" => 16, "q8" => 25, "q9" => 26);

// Start the module

echo "<font face='monospace'>DebugOut&#8482;, Ver 2.4<i>b</i>, Three Typical Trivial Tropical Trios &copy; 2011 AC-B<br /><br />";

echo "Lost? '+' indicates a new line of information, 'i' indicates information is avaliable as part of return from a program, <br /> '-' indicates something went horribly wrong, 'e' indicates an error in processing data or input, '->' indicates an actual return. <br /><br />";

//  while ($groups_of_questions >= 1) { } // Ideallicly this will allow the modules to be so flexible it won't be funny.

module_debugger(7, $question_evaluation_set1);
module_debugger(6, $question_evaluation_set2);
module_debugger(7, $question_evaluation_set3);
module_debugger(9, $question_evaluation_set4);

function module_debugger($question_number, $question_set) {
	
	$questions_in_module = $question_number;
	$question_counter = $question_number; // this is used to inc the ticker, don't touch it.
	$questions_left = 1; // again with the ticker.
	$initial_score = 0; // this is used to determine results.
	
foreach($question_set as $question){ 
	
	$value_of_answer = $_POST[$question];
	
	$initial_score = $initial_score + $value_of_answer;
	
	echo "[+ DebugOut] [i QuestionNumber (Reverse) -> " . $questions_left . "]";
	
	echo " [i CurrentArrayValue -> " . $question . "]";
	
	echo " [i ReturnedValueFromQuestion -> " . $value_of_answer . "]";
	
	echo " [i ScoreAsOfThisQuestion -> " . $initial_score . "]";
	
	echo "<br />";
	
//	$value_of_answer = $_POST[];
//	
//	$initial_score = $initial_score + $value_of_answer;
//	
//	echo "[+ DebugOut] [i QuestionNumber (Reverse) -> " . $questions_left . "]";
//	
//	echo " [i ReturnedValueFromQuestion -> " . $value_of_answer . "]";
//	
//	echo " [i ScoreAsOfThisQuestion -> " . $initial_score . "]";
//	
//	echo "<br />";
	
	$question_counter = $question_counter - 1;
	$questions_in_module = $questions_in_module - 1;
	$questions_left ++;
}

if ($initial_score <= -2) {
	echo "[+ DebugOut] [i TextToPushFromModule 'Text1'] <br />";
}
elseif ($initial_score <= 8) {
	echo "[+ DebugOut] [i TextToPushFromModule 'Text2'] <br />";
}
elseif ($initial_score <= 14) {
	echo "[+ DebugOut] [i TextToPushFromModule 'Text3'] <br />";
}


echo "[+ DebugOut] [i ScoreAsOfThisUnit -> <strong>" . $initial_score . "</strong>] <br />";
echo "[+ FunctionComplete, ReturningToProgram]  <br /><br />";
}

echo "[+ DebugComplete, NothingToDo]<br />[i Saved by the bell <i>ding, ding</i>] </font>";

?>
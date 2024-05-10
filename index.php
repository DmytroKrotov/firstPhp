<?php
#task1
$name="Taras";
echo "<p>Hello!My name is '$name'</p>";
#task2
$age=20;
echo "<p>I am $age</p>";
#task3
$a = 10;
$b = 20;
echo "<p>a =  $a</p>";
echo "<p>b =  $b</p>";
$a = $a ^ $b;
$b = $a ^ $b;
$a = $a ^ $b;
echo "<p>a =  $a</p>";
echo "<p>b =  $b</p>";
#task4
echo "<div>
<p>1.First question</p>
<select>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
</select>
<p>2.Second question</p>
<div>
<input id='1' type='radio' name='question'><label for='yes'>1</label>
</div>
<div>
<input id='2' type='radio' name='question'><label for='yes'>2</label>
</div>
<div>
<input id='3' type='radio' name='question'><label for='yes'>3</label>
</div>
<div>
<input id='4' type='radio' name='question'><label for='yes'>4</label>
</div>
<p>3.Third question</p>
<input type='text' id='text' name='text'>
</div>";
#task 6
echo "<a href='/hw1php/task6.php'>task 6</a>";


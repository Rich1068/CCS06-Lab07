<h1>Enter Data</h1>
<form method="POST" action="thankyou.php">
Name: <input type="text" name="complete_name" /><br /><br />
Email Address: <input type="email" name="email" /><br /><br />
Type:
<select name="type">
<option value="Inquiry">Inquiry</option>
<option value="Feedback">Feedback</option>
<option value="Other">Other</option>
</select><br /><br />
Level of Satisfaction: <input type="range" name="satisfaction_level" min="0" max="10" step="1" /><br /><br />
Feedback Message: <input type="text" name="message" /><br /><br />
<button>Submit</button>
</form>

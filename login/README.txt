README

Please refer to the added char, loginChart.png, for information about the login system.

Legend:

0 -- mainLoginIndex.html

1 -- dashboard.php

2 -- loginErrorIndex.html

3 -- passwordResetIndex.hmtl

4 -- passwordSuccessIndex.html

5 -- passwordErrorIndex.html

Works in the following way:
Begins at 0, continues down an arrow only if condition associated with arrow applies.

0, 2 implement checkUser.php to evaluate condition.

3,5 implement passwordReset.php to evaluate condition



Password reset works as following:

A new unique string is created, based on the time in which the user sent the form. This string is then emailed to the user, using supportMailer.php. It is then hashed, and stored in the database.

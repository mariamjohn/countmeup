# countmeup
A database driven application using Zend framework.
# Install Zend framework and PHP 5.6.0 and MySql
A _construct() connect with database.
We have two tables named votes table and results table.
votes table store vote_id(auto_increment), user_id, cand_id, date_time.
results table store cand_id, total, percent.
A class called Poll contains getVotes(), countVotes(), resultVotes() functions.
getVotes() retrieves the row with no more than 3 same user_id.
countVotes() counts the total votes of each candidate.
resultVotes() displays the percent total of each candidate.

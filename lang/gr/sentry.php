<?php
return array(
	/** General Exception Messages **/
	'account_not_activated'  => 'Ο χρήστης δεν έχει ενεργοποίησει το λογαριασμό του.',
	'account_is_disabled'    => 'Ο λογαριασμός είναι απενεργοποιημένος.',
	'invalid_limit_attempts' => 'Ρυθμίσεις Sentry: Το "limit.attempts" πρέπει να είναι ένας ακέραιος μεγαλύτερος του 0',
	'invalid_limit_time'     => 'Ρυθμίσεις Sentry: Το "limit.time" πρέπει να είναι ένας ακέραιος μεγαλύτερος του 0',
	'login_column_empty'     => 'Πρέπει να ορίσετε το πεδίο "login_column" στις ρυθμίσεις του Sentry.',

	/** Group Exception Messages **/
	'group_already_exists'      => 'Το γκρουπ ":group" υπάρχει ήδη.',
	'group_level_empty'         => 'Πρέπει να ορίσετε ένα επίπεδο για το γκρουπ.',
	'group_name_empty'          => 'Πρέπει να ορίσετε ένα όνομα για το γκρουπ.',
	'group_not_found'           => 'Το γκρουπ ":group" δεν υπάρχει.',
	'invalid_group_id'          => 'Το ID του γκρούπ πρέπει να είναι ένας ακέραιος μεγαλύτερος του 0.',
	'not_found_in_group_object' => '":field" δεν είναι ορισμένο στο αντικείμενο "group".',
	'no_group_selected'         => 'Δεν έχει επιλεγεί κάποιο γκρουπ.',
	'user_already_in_group'     => 'Ο χρήστης υπάρχει ήδη στο γκρουπ ":group".',
	'user_not_in_group'         => 'Ο χρήστης δεν βρίσκεται στο γκρουπ ":group".',

	/** User Exception Messages **/
	'column_already_exists'           => 'Το :column υπάρχει ήδη.',
	'column_and_password_empty'       => 'Το :column και ο κωδικός δεν μπορεί να είναι κενά.',
	'column_email_and_password_empty' => 'Το :column, Email και ο κωδικός δεν μπορεί να είναι κενά.',
	'column_is_empty'                 => ':column δεν μπρεί να είναι κενά.',
	'email_already_in_use'            => 'Το email αυτό χρησιμοποιείται ήδη.',
	'invalid_old_password'            => 'Ο παλιός κωδικός δεν είναι σωστός',
	'invalid_user_id'                 => 'Το ID του χρήστη πρέπει να είναι ένας ακέραιος μεγαλύτερος του 0.',
	'no_user_selected'                => 'Πρέπει πρώτα να επιλέξετε κάποιο χρήστη.',
	'no_user_selected_to_delete'      => 'Δεν έχει επιλεγεί χρήστης για διαγραφή.',
	'no_user_selected_to_get'         => 'Δεν έχει επιλεγεί κάποιος χρήστης.',
	'not_found_in_user_object'        => 'Το ":field" δεν είναι ορισμένο στο αντικείμενο "user".',
	'password_empty'                  => 'Ο κωδικός δεν μπορεί να είναι κενός.',
	'user_already_enabled'            => 'Ο χρήστης είναι ήδη ενεργοποιημένος.',
	'user_already_disabled'           => 'Ο χρήστης είναι ήδη απενεργοποιημένος.',
	'user_not_found'                  => 'Ο χρήστης δεν υπάρχει.',

	/** Attempts Exception Messages **/
    'login_ip_required'    => 'Το Id της σύνδεσης και το IP απαιτούνται για μια προσπάθεια σύνδεσης.',
    'single_user_required' => 'Οι προσπάθειες σύνδεσης αναφέρονται σε ένα μόνο χρήστη, έχει δωθεί πίνακας.',
    'user_suspended'       => 'Απαγορεύεται η σύνδεση του λογαριασμού ":account" για :time λεπτά.',
);

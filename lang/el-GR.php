<?php
/*
 * Project name: Flatboard
 * Project URL: https://flatboard.org
 * Author: Frédéric Kaplon and contributors
 * Last update: 2020.01.27
 * All Flatboard code is released under the MIT license.
 * See COPYRIGHT.txt and LICENSE.txt.
*/
# SetLocal
setlocale(LC_ALL, "el_GR");
# Définit le décalage horaire par défaut de toutes les fonctions date/heure  
date_default_timezone_set("Europe/Athens");
# Definit l'encodage interne
mb_internal_encoding("ISO-8859-1");

$lang = array(
'fr-FR'             => 'French',
'en-US'             => 'English',
'ru-RU'             => 'Russian',
'de-DE'             => 'German',
'it-IT'             => 'Italian',
'es-ES'             => 'Spanish',
'zh-CN'             => 'Chinese',
'el-GR'             => 'Greek',

'in'  => ' <i class="fa fa-clock-o"></i>',
/************* εγκαθιστώ.php ***************/
'php_version' => 'Πρέπει να έχετε διακομιστή με <b>PHP 5.2</b> ή νεότερη έκδοση για να εγκαταστήσετε το <b>Flatboard</b>!',
'flatBoard_installer' => 'Πρόγραμμα εγκατάστασης FlatBoard',
'welcome_installer' => 'Καλώς ήρθατε στο πρόγραμμα εγκατάστασης Flatboard',
'site_title' => 'Ο τίτλος του ιστότοπού σας',
'site_slogan' => 'Υπότιτλος / Περιγραφή ιστότοπου',
'your_admin_psw' => 'Πρέπει να είναι ο τύπος: user@mypassword',
'site_mail' => 'Ο λογαριασμός αλληλογραφίας διαχειριστή εδώ',
'install' => 'Εγκαθιστώ',
'installed_title' => '<i class="fa fa-bullhorn"></i> Ναι! Το Flatboard έχει πλέον εγκατασταθεί',
'installed_msg' => 'Τώρα, δημιουργήστε φόρουμ και ξεκινήστε να συζητάτε με τον κόσμο! Χρειάζεστε βοήθεια? Παρακαλούμε <a href="https://flatboard.org/view.php/plugin/page/p/docs">Διαβάστε το DOC</a>.',

/************* config.php ***************/
'homepage' => 'Αρχική Σελίδα',
'footer_text' => 'Κείμενο υποσέλιδου',
'announcement' => 'Ανακοίνωση',
'announcement_desc' => 'Αφήστε το κενό για να μην εμφανίζεται η ανακοίνωση (επιτρέπεται HTML).',
'ItemByPage' => 'Στοιχείο προς σελίδα',
'date_format' => 'Μορφή ημερομηνίας',
'date_format_desc' => 'Μορφοποίηση τοπικής ώρας/ημερομηνίας => <a href="http://php.net/manual/en/function.date.php">έγγραφο PHP</a>.',
'date_format_placeholder' => 'Y/m/d H:i',
'default_date_format' => 'l jS F o, H:i:s',
'short_date_format' => 'Μορφή σύντομης ημερομηνίας',
'maintenance' => 'Συντήρηση',
'maintenance_desc' => ' Τα φόρουμ είναι εκτός λειτουργίας για συντήρηση. Ελέγξτε ξανά σύντομα. :)',
'ban_list' => 'Λίστα απαγόρευσης',
'ban_ok'  => 'Αυτή η διεύθυνση IP δεν είναι πλέον εξουσιοδοτημένη.',
'ban_fail' => 'Αυτή η διεύθυνση IP έχει ήδη απαγορευτεί.',
'dashboard' => 'Ταμπλό',
'add_worker' => 'Προσθέστε έναν συντονιστή',
'save' => 'Αποθηκεύσετε',
'update' => 'Εκσυγχρονίζω ',
'theme' => 'Θέμα',
'theme_desc' => '<a href="config.php/deletecache" class="btn btn-primary btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> Εκκαθάριση προσωρινής μνήμης</a >',
'cache_clean' => 'Καθαρίστηκε η προσωρινή μνήμη',
'folder_deleted' => 'Ο φάκελος διαγράφηκε με επιτυχία',
'folder_error' => 'Σφάλμα κατά τη διαγραφή του φακέλου',
'lang' => 'Γλώσσα',
'editor' => 'Συντάκτης',
'bbcode' => 'BBcode',
'markdown' => 'Χαμήλωση τιμής',
'editor_desc' => 'BBcode ή μορφή σήμανσης',
'style' => 'Σχέδιο χρωμάτων ' .Util::Help('Σας επιτρέπει να προσαρμόσετε το χρώμα της γραμμής πλοήγησης.'),
'style_placeholder' => 'σχιστόλιθος, #000000…',
'nb_page_scroll_infinite' => 'Πόσες σελίδες για αυτόματη κύλιση',
'nb_page_scroll_desc' => 'Ρυθμίστε στο 1 για να απενεργοποιήσετε την αυτόματη κύλιση.',
'salt' => 'Ασφάλεια κλειδιού',
'salt_desc' => 'Αφήστε κενό για να δημιουργήσετε ένα κλειδί',
'manage_tags' => 'Διαχείριση ετικετών',
'tags' => 'Ετικέτες',
'tags_help' => 'Οι ετικέτες σάς επιτρέπουν να "σημαδεύετε" τους τίτλους των συζητήσεών σας. Κάνουν τον τίτλο πιο ελκυστικό και στη συνέχεια χρησιμεύουν ως φίλτρο στις αναζητήσεις σας στο φόρουμ.<br />Για να τις εμφανίσετε, εισαγάγετε τουλάχιστον ένα στην παρακάτω λίστα.<br />Με τη μορφή μιας νέας συζήτησης, θα δείτε να εμφανίζεται ένας επιλογέας ετικετών.<div class="divider"></div>Όταν είναι επιλεγμένο το πλαίσιο, η λέξη-κλειδί παραμένει αόρατη από τη λίστα όταν δημοσιεύεται μια συζήτηση. Αυτή η λέξη-κλειδί παίζει τον ρόλο του φιλτραρίσματος στα ονόματα χρηστών, για να γίνει επαληθευμένη ταυτότητα. Παρέχεται ένα δείγμα κώδικα, αλλά μπορείτε να τον τροποποιήσετε ελεύθερα.',
'tags_empty' => 'Η λίστα ετικετών είναι άδεια!',
'replace' => 'Αντικατάσταση',
'tags_result' => 'Αποτέλεσμα',
'blog' => 'Ιστολόγιο',
'blog_new' => 'Επιλέξτε ένα φόρουμ που θα παρέχει νέα στο ιστολόγιό σας.',
'disable_blog' => 'Απενεργοποιήστε το ιστολόγιο',
'post_summary' => 'Αριθμός λέξεων της ανάρτησης για περίληψη.',
'hidden_tag' => 'Έγινε απόκρυψη αυτής της ετικέτας',
'title_tag' => '[Η ετικέτα μου]',
'user' => 'Χρήστης',
'username_check' => 'Όνομα χρήστη για έλεγχο',
'user_checked' => 'Έλεγξε ο χρήστης',
'back_to_site' => 'Επιστροφή στον ιστότοπο',
'good-morning' => 'Καλημέρα',
'good-afternoon' => 'Καλό απόγευμα',
'good-evening' => 'Καλό απόγευμα',
'good-night' => 'Καληνυχτα',
'hello' => 'γεια σας',
'note' => 'Σημείωση',

/************* ταμπλό ***************/
'pro_edition' => 'PRO - Ευχαριστούμε για την υποστήριξη Flatboard',
'standard_edition' => 'Τυπικό - <a class="btn btn-link" href="https://flatboard.org/download.php" onclick="window.open(this.href); return false;">Αναβάθμιση σε Flatboard PRO</ α>',

/************* Σύστημα μηνυμάτων ***************/
'warning_installation_file' => 'Το αρχείο install.php εξακολουθεί να βρίσκεται στη ρίζα του Flatboard.<br />Για λόγους ασφαλείας, συνιστάται ανεπιφύλακτα να <a class="badge badge-danger" href="config.php/delinstallfile" title="διαγραφή τώρα ?">διαγράψτε το</a>.',
'new_version' => 'Νέα έκδοση διαθέσιμη',
'theme_not_found' => 'Το κύριο θέμα Flatboard δεν βρέθηκε',

/************* Προσθήκη.php ***************/
'topic_added' => 'Το θέμα προστέθηκε!',
'reply_added' => 'Η απάντηση προστέθηκε!',
'forum_added' => 'Το φόρουμ προστέθηκε!',
'write_post' => 'Γράψτε μια ανάρτηση…',
'modo_added' => 'Προστέθηκε νέος συντονιστής!',
'trip' => 'Ψευδής ' .Util::Help('Δεν χρειάζεται να «εγγραφείτε», απλώς εισάγετε το ίδιο όνομα@κωδικό της επιλογής σας κάθε φορά. Ο κωδικός πρόσβασής σας θα εμφανίζεται κρυπτογραφημένος και θα κατακερματίζεται στους επισκέπτες για λόγους ασφαλείας!'),
'badge_color' => 'Χρώμα σήματος',
'badge_color_desc' => 'Εισαγάγετε ένα δεκαεξαδικό χρώμα.',
'font_icon' => 'Κατηγορία εικονιδίων',
'font_icon_placeholder' => 'fa-folder',
'font_icon_desc' => 'Μεταβείτε στον ιστότοπο <a href="http://fontawesome.io/icons/">Font Awesome</a> για να επιλέξετε ένα εικονίδιο',
'email_sent' => 'Το email στάλθηκε με επιτυχία',
'email_nosent' => 'Δεν ήταν δυνατή η αποστολή email',
'report_desc' => 'Σημείωση: Ο συντονιστής θα ενημερωθεί για τον σύνδεσμο προς τη σελίδα που αναφέρετε.<br />Αυτή η φόρμα προορίζεται ΜΟΝΟ για την αναφορά απαράδεκτου περιεχομένου και δεν πρέπει να χρησιμοποιείται ως μέσο επικοινωνίας με τους συντονιστές για άλλους λόγους.',
'your_email' => 'Η διεύθυνση email σας για παν ενδεχόμενο',
'click_to_view_post' => 'Κάντε κλικ εδώ για να δείτε την ανάρτηση',
'order' => 'Σειρά',
'flood_start' => 'Πρέπει να περάσουν τουλάχιστον 60 δευτερόλεπτα μεταξύ των αναρτήσεων. Περιμένετε %s λεπτά και δοκιμάστε να δημοσιεύσετε ξανά.',
'private' => 'Κάντε ιδιωτική πρόσβαση στον ιστότοπο.',
'restrict_access' => 'Περιορίστε την πρόσβαση στην τοποθεσία στην ομάδα του φόρουμ.',
'private_msg' => 'Λυπούμαστε, δεν έχετε δικαιώματα για να ανοίξετε αυτήν τη σελίδα.',
'unauthorized_access' => 'Μη εξουσιοδοτημένη πρόσβαση',
'no_tag' => 'ΟΧΙ TAG',
'more_info' => 'Κάντε κλικ εδώ για περισσότερες λεπτομέρειες',
'cancel' => 'Ματαίωση',
'choose_pic' => 'Επιλέξτε μια εικόνα',
'upload' => 'Μεταφόρτωση',
'private_forum' => 'Ιδιωτικό φόρουμ',
'private_forum_desc' => 'Το φόρουμ είναι προσβάσιμο μόνο στην ομάδα του ιστότοπου.',

/************* διαγράφω.php ***************/
'topic_deleted' => 'Το θέμα διαγράφηκε!',
'reply_deleted' => 'Η απάντηση διαγράφηκε!',
'forum_deleted' => 'Το φόρουμ διαγράφηκε!',
'worker_deleted' => 'Ο συντονιστής διαγράφηκε!',
'ip_not_banned' => 'Αυτή η διεύθυνση IP δεν απαγορεύτηκε.',
'ip_removed' => 'Η διεύθυνση IP έχει αφαιρεθεί.',

/************* επεξεργασία.php ***************/
'topic_edited' => 'Ελα στη συζήτηση',
'reply_edited' => 'Η απάντηση διορθώθηκε!',
'forum_edited' => 'Το φόρουμ επεξεργάστηκε!',
'pinned_homepage' => 'Καρφιτσωμένο στο σπίτι',
'pick_font' => 'Επιλέξτε ένα εικονίδιο',
'useSpace' => true,
'home' => 'Σπίτι',
'thread_sug'  => 'Προτεινόμενα Θέματα',
'change_pwd'  => 'Να αλλάξω τον κωδικό πρόσβασής μου',
'topic' => 'Θέμα',
'newthread' => 'Ξεκινήστε μια συζήτηση',
'reply' => 'Απάντηση',
'replies' => 'Απαντήσεις',
'newreply' => 'Νέα απάντηση',
'quote_reply' => 'Απάντηση σε εισαγωγικό',
'quote_by' => 'Παράθεση από',
'add_forum'   => 'Προσθήκη φόρουμ',
'plugin' => 'Συνδέω',
'config' => 'Διαμόρφωση',
'logout' => 'Αποσύνδεση',
'login' => 'Σύνδεση',
'redirect' => 'Επιστρέψτε στο',
'add' => 'Προσθήκη',
'edit' => 'Επεξεργασία',
'delete' => 'Διαγράφω',
'title' => 'Τίτλος',
'content' => 'Περιεχόμενο',
'name' => 'Ονομα',
'mail' => 'ΗΛΕΚΤΡΟΝΙΚΗ ΔΙΕΥΘΥΝΣΗ',
'mail_desc' => 'δεν παρουσιάστηκε ποτέ στο κοινό',
'not_required' => '(δεν απαιτείται)',
'search' => 'Αναζήτηση',
'forum' => 'Δικαστήριο',
'password' => 'Κωδικός πρόσβασης',
'confirm_password' => 'Επιβεβαίωση Κωδικού',
'powered' => 'Δημιουργήθηκε με <a href="https://flatboard.org" onclick="window.open(this.href); return false;">Flatboard' .(defined('FLATBOARD_PRO')?' Pro':'') . '</a> και <i class="fa fa-heart"></i>.',
'feed' => 'Ταίζω',
'none' => 'Καμία είσοδος μέχρι στιγμής',
'info' => 'Πληροφορίες',
'date' => 'Ημερομηνία',
'activity' => 'Δραστηριότητα',
'view' => 'Θέα',
'count' => 'Θέση',
'new' => 'Νέος',
'more' => 'Συνέχισε να διαβάζεις',
'submit' => 'υποβάλλουν',
'admin' => 'Διαχειριστής',
'worker' => 'Μεσολαβητής',
'sort_forums' => 'Ταξινόμηση φόρουμ',
'yes' => 'Ναί',
'no' => 'Οχι',
'locked' => 'Κλειδωμένο',
'no_reply' => 'Δεν μπορώ να απαντήσω',
'locked_discussion' => 'κλείδωσε τη συζήτηση.',
'report' => 'Κανω ΑΝΑΦΟΡΑ',
'day' => 'ημέρα',
'hour' => 'ώρα',
'minute' => 'λεπτό',
'second' => 'δεύτερος',
'plural' => 's',
'ago' => 'πριν',
'errLen' => 'Πολύ σύντομο / μακρύ',
'errBot' => 'Λάθος κωδικός',
'errNb' => 'Αυτός δεν είναι θετικός ακέραιος αριθμός',
'ErrContentFilter' => 'Έχετε εισαγάγει τουλάχιστον μία λογοκριμένη λέξη, παρακαλούμε να είστε ευγενικοί.',
'pinned' => 'Καρφιτσωμένο',
'stickied_discussion' => 'κόλλησε τη συζήτηση.',
'replied' => '<i class="fa fa-share-square"></i> απάντησε ',
'started' => '<i class="fa fa-bolt"></i> ξεκίνησε ',
'notFound' => 'Ωχ! Η σελίδα δεν υπάρχει :(',
'errNotMatch' => 'Αναντιστοιχία κωδικού πρόσβασης',
'captcha' => 'Captcha',
'enter_code' => 'Εισαγάγετε τον κωδικό ασφαλείας',
'math_result' => 'Απαντήστε σε αυτή την απλή μαθηματική ερώτηση',
'math_captcha' => 'Χρήση Μαθηματικών captcha;',
'r_captcha'   => 'Επαναφόρτωση εικόνας',
'quickNav' => 'Γρήγορη πλοήγηση',
'invalid_token' => 'Μη έγκυρο διακριτικό!',
'mail_available' => 'Διατίθεται η λειτουργία αποστολής αλληλογραφίας',
'mail_not_available' => 'Η λειτουργία αποστολής αλληλογραφίας δεν είναι διαθέσιμη',
'statistics' => 'Στατιστική',
'start' => '<div class="alert alert-primary" role="alert"><h6>Συγχαρητήρια! Το Flatboard έχει πλέον εγκατασταθεί σωστά.</h6>Για να ξεκινήσετε, πρέπει να προσθέσετε ένα φόρουμ. <a href="add.php/forum" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a></div>',
'no-forum' => 'Δεν υπάρχει φόρουμ για εμφάνιση.',

/************* θέα.php ***************/
'permalink' => 'Μόνιμος σύνδεσμος',
'solved' => 'λυθεί',
'original_message' => 'ΣΥΖΗΤΗΣΗ ΚΑΤΑΓΩΓΗΣ',
'last_modified' => 'Τελευταία τροποποίηση από %s στις ',
'last_post' => 'Τελευταία ανάρτηση',
'user_activity' => 'Δείτε τη δραστηριότητά τους.',
'error' => 'ΛΑΘΟΣ',
'no_plugin' => 'Αυτό το πρόσθετο δεν υπάρχει Ή δεν είναι ενεργοποιημένο!',
'want_more' => 'Θέλετε να διαβάσετε περισσότερα; <a href="index.php' . DS . 'forum">Περιηγηθείτε σε όλες τις κατηγορίες</a> ή <a href="' .HTML_BASEPATH. '">δείτε τα πιο πρόσφατα θέματα</a>.',
'close_del_content' => 'Κλείνοντας αυτό το παράθυρο με αυτό το κουμπί θα διαγραφούν τα περιεχόμενα.',
'reply_this_topic' => 'Ελα στη συζήτηση',

/************* Αναζήτηση.php ***************/
'search_term_found' => 'Ο όρος αναζήτησης βρέθηκε.',
'search_desc' => 'Η έρευνα γίνεται σχετικά με: τον συγγραφέα, τον τίτλο, την ετικέτα και το περιεχόμενο ενός θέματος.',
'search_holder' => 'συγγραφέας, τίτλος, ετικέτα ή περιεχόμενο.',
'click_tag_search' => 'Κάντε κλικ σε μια ετικέτα για εισαγωγή στην αναζήτηση.',

/************* Συνδέω ***************/
'state'        => 'Πρόσθετο On/Off',
'state_on'     => 'Επί',
'state_off'    => 'Μακριά από',
'data_save'    => 'Εξοικονόμηση δεδομένων!',
'description'  => 'Περιγραφή',
'author'       => 'Συγγραφέας',
'check_all'    => 'Ελεγξε τα ολα',
'plugin_help'    => '<i class="fa fa-warning"></i> Βοήθεια',
'manage_plugin'    => 'Διαχείριση προσθήκης',
'cantDisable'  => 'Αυτό το πρόσθετο δεν μπορεί να απενεργοποιηθεί.',
'click_to_active'=>'Ενεργοποιήστε το πρόσθετο.',
'click_to_disable'=>'Απενεργοποιήστε την προσθήκη.',

/************* auth.php ***************/
'password_changed' => 'Ο κωδικός πρόσβασής σας τροποποιήθηκε με επιτυχία!',
'edit_password' => 'Αλλάξτε τον κωδικό σας',
'login_confirm' => 'Έγινε επιτυχής σύνδεση.',
'logout_confirm' => 'Αποσυνδέθηκα.',
'incorrect_password' => 'Λάθος κωδικός.',
'error_maxlogin' => 'Πάρα πολλά αποτυχημένα στοιχεία σύνδεσης. Προσπαθήστε ξανά σε % s λεπτά.',
'already_logged' => 'Ειστε ηδη συνδεδεμενος!',
'already_logged_msg' => 'Έχετε ήδη συνδεθεί ως <b>%s</b>, πρέπει να αποσυνδεθείτε πριν συνδεθείτε ως διαφορετικός χρήστης.',
'bad_user_syntax' => 'Το όνομα χρήστη σας πρέπει να έχει την ακόλουθη σύνταξη: <b>όνομα@κωδικός πρόσβασης</b>',
'previous_page' => 'την προηγούμενη σελίδα.',

/************* Υπηρεσίες.php ***************/
'ban_user' => 'Απαγόρευση αυτής της IP',
'unban_user' => 'Κατάργηση αποκλεισμού αυτής της IP',
'banned' => 'Σας έχουν απαγορευτεί!',
'your_banned' => 'Έχετε αποκλειστεί οριστικά από αυτό το φόρουμ.<br />Επικοινωνήστε με τον διαχειριστή του φόρουμ για περισσότερες πληροφορίες.<br />Λόγος απαγόρευσης: ως μέρος της πολιτικής μας που είναι ενεργή κατά των ανεπιθύμητων μηνυμάτων,<br />η διεύθυνση IP σας: ',
'has_banned' => ' έχει απαγορευτεί!',
'ban' => 'Εύρος διεύθυνσης IP / διευθύνσεων IP'

);
?>
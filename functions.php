//////////////////////////////////////////////////////////////////////////////////////   

// Ρυθμίζουμε τον SMTP στο WordPress
function custom_wp_mail_smtp($phpmailer) {
    // Ορίζουμε τον SMTP server
    $phpmailer->isSMTP();
    $phpmailer->Host       = 'mail.domain.gr'; //Εδώ βάζετε το outgoing server
    $phpmailer->SMTPAuth   = true;
    $phpmailer->Username   = 'info@domain.gr'; //Εδώ βάζετε το e-mail του αποστολέα (πχ το info mail σας)
    $phpmailer->Password   = 'Kodikos_edo'; //Εδώ βάζετε τον κωδικό σας
    $phpmailer->SMTPSecure = 'ssl';
    $phpmailer->Port       = 465; //Εδώ βάζετε το SMTP port

    // Επιβεβλημένος αποστολέας
    $phpmailer->From       = 'info@domain.gr'; //Εδώ βάζετε το e-mail του αποστολέα (πχ το info mail σας)
}

// Προσθέτουμε τη λειτουργία custom_wp_mail_smtp στο hook phpmailer_init
add_action('phpmailer_init', 'custom_wp_mail_smtp');

//////////////////////////////////////////////////////////////////////////////////////  

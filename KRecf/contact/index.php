<?php
$title = 'Contact Us';

require_once __DIR__ . '/../inc/bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'email' => filter_input(INPUT_POST, 'email'),
        'name' => filter_input(INPUT_POST, 'name'),
        'message' => filter_input(INPUT_POST, 'message'),
    ];
    $body = '' . PHP_EOL;
    $body .= 'Email: ' . $data['email'] . PHP_EOL;
    $body .= 'Name: ' . $data['name'] . PHP_EOL;
    $body .= 'Message: ' . $data['message'] . PHP_EOL;

    mail('Arcadia@example.com', "Contact Form", $body);

    $_SESSION['contact_form_message'] = 'Thank you, we will get in touch with you as soon as possible!';
    header('Location: /contact');
    die;
}

require_once __DIR__ . '/../inc/header.php'; ?>

<link rel="stylesheet" href="/assets/css/styles2.css">

<header>
    <h1>Contact Us</h1>
</header>

<section>
    <form method="post">
        <label for="name">Your Name</label>
        <input type="text" name="name" required>
        <label for="name">Your E-mail</label>
        <input type="email" name="email" required>
        <label for="message">Your Message</label>
        <textarea name="message" rows="4" required></textarea>
        <button type="submit">Send</button>
    </form>
    <div class="Contact-info">
        <h2>Contact Information</h2>
        <p>Email: Arcadia@example.com</p>
        <p>Phone: (+33) 02 99 07 84 23</p>
        <p>Adress: la forêt de brocéliande, 35380 Paimpont</p>
    </div>
</section>

<?php require_once __DIR__ . '/../inc/footer.php';

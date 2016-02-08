<?php
$pageTitle = "Contact";
$section = "contact";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $email_body = "";

    $email_body = $email_body . "Name: " . $name . "<br>";
    $email_body = $email_body . "E-mail: " . $email . "<br>";
    $email_body = $email_body . "Message: " . $message . "<br>";

//TODO: send email

    header("Location: contact.php?status=thanks");
    exit;
}
/**
 * Created by PhpStorm.
 * User: manuelernesto
 * Date: 2/6/16
 * Time: 4:53 PM
 */

include('inc/header.php'); ?>

    <div class="section page" xmlns="http://www.w3.org/1999/html">

        <div class="wrapper">
            <h1>Contact</h1>

            <?php
            if (isset($_GET["status"]) && $_GET["status"] == "thanks") { ?>
                <p>Thanks for the email! I&rsquo;ll be in touch shortly. </p>
            <?php } else {?>

            <p>I&rsquo;d love to hear from you! Complete a form to send me an email. </p>

            <form method="post" action="contact.php">
                <table>
                    <tr>
                        <th>
                            <label for="name">Name </label>
                        </th>
                        <td>
                            <input type="text" name="name" id="name">
                        </td>
                    </tr>

                    <tr>
                        <th>
                            <label for="email">E-mail </label>
                        </th>
                        <td>
                            <input type="email" name="email" id="email">
                        </td>
                    </tr>

                    <tr>
                        <th>
                            <label for="message">Message</label>
                        </th>
                        <td>
                            <textarea name="message" id="message"></textarea>
                        </td>
                    </tr>

                </table>
                <input type="submit" value="Send">

            </form>
<?php } ?>
        </div>

    </div>


<?php include('inc/footer.php') ?>
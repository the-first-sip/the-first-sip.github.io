---
layout: page
title: Contact Us
description:
---

    <?php

    if($_POST["submit"]) {
    $recipient="charles@thespicehut.com";
    $subject="Form to email message";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
    }

    ?>
    <section>
				<h4>How can we help?</h4>
				<form method="post" action="contact.php">
					<div class="row uniform">
						<div class="6u 12u$(xsmall)">
							<input type="text" name="name" id="name" value="" placeholder="Name" />
						</div>
						<div class="6u$ 12u$(xsmall)">
							<input type="email" name="email" id="email" value="" placeholder="Email" />
						</div>
            <div class="6u 12u$(small)">
							<input type="checkbox" id="copy" name="copy">
							<label for="copy">Email me a copy</label>
						</div>
						<div class="6u$ 12u$(small)">
							<input type="checkbox" id="human" name="human">
							<label for="human">Not a robot</label>
						</div>
						<div class="12u$">
							<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
						</div>
						<div class="12u$">
							<ul class="actions">
								<li><input type="submit" value="Send" class="special" /></li>
								<li><input type="reset" value="Reset" /></li>
							</ul>
						</div>
					</div>
				</form>
			</section>

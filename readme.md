<h1> Stripe Gateway Payment test application</h1>
<h2> Description</h2>
<p> Application that creates test payment via Stripe gateway. After successful 
billing, application creates test file of payment data. Full path to file will
be displayed in success message page.</p>
<h2> Set up </h2>
<ol>
    <li>Clone the repository:
        <br>
        Type in to your terminal: <br>
        git clone https://github.com/gytis-apanavicius/stripe-payment
    </li>
    <li>
        Move your terminal to the folder that git created:<br>
        cd stripe-payment
    </li>
        <li>
            Make sure all permissions are as needed. Type in terminal (for linux users): <br>
            sudo chmod 775 . -R
        </li>
    <li>
        Update using composer. Type to terminal: <br>
        composer update
    </li>
    <li>
            Create your .env file. Use your .env.example as reference (You can simply 
            remove .example suffix from file for this application)
    </li>
    <li>
        Generate application key. Type in terminal <br>
        php artisan key:generate
    </li>
    <li>
        Run the server by typing the following to your terminal:<br>
        php artisan serve
    </li>
    <li>
        Url that needs to be used to access the application should be visible in the terminal.
    </li>
</ol>

<h2>Usage</h2>
<p>In the credit card field type: 4242 4242 4242 4242 </p>
<p> Expiration date can be any date from tommorrow
<p> CVC any 3 digit length number </p>
<p> Zip code: any zipcode that is valid</p>
<p> After entering your data press "Submit Payment". Then you will be redirected to
a page that informs you about successful payment. Also the page contains full path
to the file where information about this particular payment is contained. </p>
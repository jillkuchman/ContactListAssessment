<!DOCTYPE html>
<html>
    <head>
        <title>Address Book</title>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css' type='text/css'>
    </head>
    <body>
        <div class='container'>
            <h1>Address Book</h1>

            {% if contacts is not empty %}
                <ul>
                    {% for contact in contacts %}
                        <li>{{ contact.getName }}</li>
                        <ul>
                            <li>{{ contact.getNumber }}</li>
                            <li>{{ contact.getAddress }}</li>
                        </ul>
                    {% endfor %}
                </ul>
            {% endif %}

            <form action='/newcontact' method='post'>

                <label for='name'>Contact Name</label>
                <input id='name' name='name' type='text'>
                <br>
                <label for='number'>Phone Number</label>
                <input id='number' name='number' type='text'>
                <br>
                <label for='address'>Address</label>
                <input id='address' name='address' type='text'>
                <br>
                <button type='submit'>Add Contact</button>
            </form>

        </div>
    </body>
</html>

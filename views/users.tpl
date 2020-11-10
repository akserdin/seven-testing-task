<h2>Add new user</h2>
<?php include VIEWS_DIR . 'form.tpl'; ?>

<!-- List of users and form -->
<h2>All users</h2>

<?php

if(! empty($data)) {
    echo '<ul>';

    foreach($data['users'] as $user) {
        echo "<li>{$user['name']} ({$user['email']})</li>";
    }

    echo '</ul>';
}
?>

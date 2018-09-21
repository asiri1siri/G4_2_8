<?php namespace App\Controllers;

use System\BaseController;
use App\Helpers\Session;
use App\Helpers\Url;
use App\Models\Contact;
use App\Models\Comment;

class Contacts extends BaseController
{
    protected $contact;

    public function __construct()
    {
        parent::__construct();

        if (! Session::get('logged_in')) {
            Url::redirect('/admin/login');
        }

        $this->contact = new Contact();
    }

    public function index()
    {
        $contacts = $this->contact->get_contacts();

        $title = 'Contacts';
        return $this->view->render('admin/contacts/index', compact('contacts', 'title'));
    }

    public function add()
    {
        $errors = [];

        if (isset($_POST['submit'])) {
            $ENABLED  = (isset($_POST['ENABLED']) ? $_POST['ENABLED'] : null);
            $ID = (isset($_POST['ID']) ? $_POST['ID'] : null);
            $NAME  = (isset($_POST['NAME']) ? $_POST['NAME'] : null);
            $USERNAME = (isset($_POST['USERNAME']) ? $_POST['USERNAME'] : null);
            $USERTYPE  = (isset($_POST['USERTYPE']) ? $_POST['USERTYPE'] : null);
            $EMAIL = (isset($_POST['EMAIL']) ? $_POST['EMAIL'] : null);

            if (strlen($NAME) < 3) {
                $errors[] = 'Name is too short';
            }

            if (count($errors) == 0) {

                $data = [
                    'ENABLED' => $ENABLED,
                    'ID' => $ID,
                    'NAME' => $NAME,
                    'USERNAME' => $USERNAME,
                    'USERTYPE' => $USERTYPE,
                    'EMAIL' => $EMAIL,
                ];

                $this->contact->insert($data);

                Session::set('success', 'Contact created');

                Url::redirect('/contacts');

            }

        }

        $this->view->render('admin/contacts/add', compact('errors'));
    }

    public function edit($ID)
    {
        if (! is_numeric($ID)) {
            Url::redirect('/contacts');
        }

        $contact = $this->contact->get_contact($ID);

        if ($contact == null) {
            Url::redirect('/404');
        }

        $errors = [];

        if (isset($_POST['submit'])) {
            $ENABLED  = (isset($_POST['ENABLED']) ? $_POST['ENABLED'] : null);
            $ID = (isset($_POST['ID']) ? $_POST['ID'] : null);
            $NAME  = (isset($_POST['NAME']) ? $_POST['NAME'] : null);
            $USERNAME = (isset($_POST['USERNAME']) ? $_POST['USERNAME'] : null);
            $USERTYPE  = (isset($_POST['USERTYPE']) ? $_POST['USERTYPE'] : null);
            $EMAIL = (isset($_POST['EMAIL']) ? $_POST['EMAIL'] : null);

/*
            if (strlen($NAME) < 3) {
                $errors[] = 'Name is too short';
            }
*/
            if (count($errors) == 0) {

                $data = [
                    'ENABLED' => $ENABLED,
                    'ID' => $ID,
                    'NAME' => $NAME,
                    'USERNAME' => $USERNAME,
                    'USERTYPE' => $USERTYPE,
                    'EMAIL' => $EMAIL,
                ];

                $where = ['ID' => $ID];

                $this->contact->update($data, $where);

                Session::set('success', 'Contact updated');

                Url::redirect('/contacts');

            }

        }

        $title = 'Edit Contact';
        $this->view->render('admin/contacts/edit', compact('contact', 'errors', 'title'));
    }
/*
    public function view($ID)
    {
        if (! is_numeric($ID)) {
            Url::redirect('/contacts');
        }

        $contact = $this->contact->get_contact($ID);

        if ($contact == null) {
            Url::redirect('/404');
        }

        $comment = new Comment();

        if (isset($_POST['submit'])) {
            $body  = (isset($_POST['body']) ? $_POST['body'] : null);

            if ($comment !='') {

                $data = [
                    'body' => $body,
                    'contact_id' => $ID,
                    'user_id' => Session::get('user_id')
                ];

                $comment->insert($data);

                Session::set('success', 'Comment created');

                Url::redirect("/contacts/view/$ID");

            }

        }

        $comments = $comment->get_comments($ID);

        $title = 'View Contact';
        $this->view->render('admin/contacts/view', compact('contact', 'comments', 'title'));
    }
*/
    public function delete($ID)
    {
        if (! is_numeric($ID)) {
            Url::redirect('/contacts');
        }

        $contact = $this->contact->get_contact($ID);

        if ($contact == null) {
            Url::redirect('/404');
        }

        $where = ['ID' => $contact->ID];

        $this->contact->delete($where);

        Session::set('success', 'Contact deleted');

        Url::redirect('/contacts');
    }
}

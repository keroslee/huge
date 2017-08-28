<?php

class AdminController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();

        // special authentication check for the entire controller: Note the check-ADMIN-authentication!
        // All methods inside this controller are only accessible for admins (= users that have role type 7)
        Auth::checkAdminAuthentication();
    }

    /**
     * This method controls what happens when you move to /admin or /admin/index in your app.
     */
    public function index()
    {
        $this->View->render('admin/index', array(
                'users' => UserModel::getPublicProfilesOfAllUsers())
        );
    }

    public function edit()
    {
        $id = Request::post('id');
        if($id){
            $user = UserModel::getPublicProfileOfUser($id);
        }else{
            $user = null;
        }

        $this->View->render('admin/edit', array(
                'user' => $user)
        );
    }

    public function update()
    {
        $id = Request::post('id');
        if($id){
            $res = UserModel::update();
        }else{
            $res = UserModel::insert();
        }
var_dump($res);
        if ($res) {
            Redirect::to('/admin');
        } else {
//            Redirect::to('/admin/edit');
        }
    }

    public function delete()
    {
        echo UserModel::delete(Request::post('id'));
    }

    public function actionAccountSettings()
    {
        AdminModel::setAccountSuspensionAndDeletionStatus(
            Request::post('suspension'), Request::post('softDelete'), Request::post('user_id')
        );

        Redirect::to("admin");
    }
}

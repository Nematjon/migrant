<?php
namespace app\commands;
namespace console\controllers;
use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        // ��������� ���������� "createPost"
        $createPost = $auth->createPermission('createPost');
        $createPost->description = 'Create a post';
        $auth->add($createPost);

        // ��������� ���������� "updatePost"
        $updatePost = $auth->createPermission('updatePost');
        $updatePost->description = 'Update post';
        $auth->add($updatePost);

        // ��������� ���� "author" � ��� ���� ���������� "createPost"
        $author = $auth->createRole('author');
        $auth->add($author);
        $auth->addChild($author, $createPost);

        // ��������� ���� "admin" � ��� ���� ���������� "updatePost"
        // � ����� ��� ���������� ���� "author"
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $updatePost);
        $auth->addChild($admin, $author);

        // ���������� ����� �������������. 1 � 2 ��� IDs ������������ IdentityInterface::getId()
        // ������ ����������� � ������ User.
        $auth->assign($author, 2);
        $auth->assign($admin, 1);
    }
}

/*
namespace console\controllers;

use Yii;
use yii\console\Controller;
/**
 * ������������� RBAC ����������� � ������� php yii rbac/init
 *
class RbacController extends Controller {

    public function actionInit() {
        $auth = Yii::$app->authManager;
        
        $auth->removeAll(); //�� ������ ������ ������� ������ ������ �� ��...
        
        // �������� ���� ������ � ��������� ��������
        $admin = $auth->createRole('admin');
        $editor = $auth->createRole('editor');
        
        // ������� �� � ��
        $auth->add($admin);
        $auth->add($editor);
        
        // ������� ����������. ��������, �������� ������� viewAdminPage � �������������� ������� updateNews
        $viewAdminPage = $auth->createPermission('viewAdminPage');
        $viewAdminPage->description = '�������� �������';
        
        $updateNews = $auth->createPermission('updateNews');
        $updateNews->description = '�������������� �������';
        
        // ������� ��� ���������� � ��
        $auth->add($viewAdminPage);
        $auth->add($updateNews);
        
        // ������ ������� ������������. ��� ���� editor �� ������� ���������� updateNews,
        // � ��� ������ ������� ������������ �� ���� editor � ��� ������� ����������� ���������� viewAdminPage
        
        // ���� ��������� �������� ����������� ���������� ��������������� �������
        $auth->addChild($editor,$updateNews);

        // ����� ��������� ���� ��������� ��������. �� �� �����, ������ ����� ��! :D
        $auth->addChild($admin, $editor);
        
        // ��� ����� ����� ����������� ���������� - ��������� �������
        $auth->addChild($admin, $viewAdminPage);

        // ��������� ���� admin ������������ � ID 1
        $auth->assign($admin, 1); 
        
        // ��������� ���� editor ������������ � ID 2
        $auth->assign($editor, 2);
    }
}
*/
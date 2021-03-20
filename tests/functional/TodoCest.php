<?php
use app\tests\fixtures\UserFixture;

class TodoCest
{
    public function _fixtures()
    {
        return [
            'users' => [
                'class' => UserFixture::class,
                // fixture data located in tests/_data/user.php
                'dataFile' => codecept_data_dir() . 'user.php'
            ],
        ];
    }

    public function dontSeeTodoAsGuest(\FunctionalTester $I)
    {
        $I->amOnRoute('site/index');
        $I->dontSeeLink('Todo', 'todo/index');
    }

    public function seeTodoAsLoggedUser(\FunctionalTester $I)
    {
        $I->amLoggedInAs(100);

        $I->amOnRoute('site/index');
        $I->seeLink('Todo', 'todo/index');
    }
}

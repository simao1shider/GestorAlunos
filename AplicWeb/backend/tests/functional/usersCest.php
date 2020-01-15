<?php namespace backend\tests\functional;
use backend\tests\FunctionalTester;

class usersCest
{
    public function _before(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
        $I->amOnPage('login');
        $I->fillField('LoginForm[username]', 'simao');
        $I->fillField('LoginForm[password]', '123456');
        $I->click('login-button');
        $I->click(['class' => 'users']);
        $I->click(['class' => 'btn-success']);
        $I->fillField('SignupForm[username]', 'testefuncional1');
        $I->fillField('SignupForm[email]', 'teste1@teste.pt');
        $I->fillField('SignupForm[password]', '123456');
        $I->click(['class' => 'btn-primary']);
        $I->see('Registo Efetuado com Sucesso!');
    }
}

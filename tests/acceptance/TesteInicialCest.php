<?php


class TesteInicialCest
{
    public function TesteInicial(AcceptanceTester $I)
    {
    	//Verifica se esta na página
        $I->amOnPage('/index');
        $I->see('Teste');

        //Preenche os campos do form
        $I->fillField('Nome', 'meuemail@proesc.com');
        $I->fillField('senha', '123456');

        //Aguarda para proximo passo
        $I->wait(3);
    }
}

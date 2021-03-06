<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = null)
 *
 * @SuppressWarnings(PHPMD)
 */
class UnitTester extends \Codeception\Actor
{
    use _generated\UnitTesterActions;

    /**
     * @param string $contents
     */
    public function dumpFile($contents)
    {
        $name = preg_replace('/[^\w\d]/s', '-', $this->scenario->getFeature());

        file_put_contents(dirname(__DIR__) . "/_output/mail.{$name}.txt", $contents);
    }
}

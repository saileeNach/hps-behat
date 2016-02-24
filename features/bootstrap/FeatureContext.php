<?php
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

require_once('Actionwords.php');

class FeatureContext implements SnippetAcceptingContext {
  public function __construct() {
    $this->actionwords = new Actionwords();
  }


  /**
   * @When /^I start the coffee machine "(.*)"$/
   */
  public function iStartTheCoffeeMachine($lang = "en"){
    $this->actionwords->iStartTheCoffeeMachine($lang);
  }

  /**
   * @When /^I shutdown the coffee machine$/
   */
  public function iShutdownTheCoffeeMachine(){
    $this->actionwords->iShutdownTheCoffeeMachine();
  }

  /**
   * @Then /^message "(.*)" should be displayed$/
   */
  public function messageMessageShouldBeDisplayed($message){
    $this->actionwords->messageMessageShouldBeDisplayed($message);
  }

  /**
   * @Then /^coffee should be served$/
   */
  public function coffeeShouldBeServed(){
    $this->actionwords->coffeeShouldBeServed();
  }

  /**
   * @Then /^coffee should not be served$/
   */
  public function coffeeShouldNotBeServed(){
    $this->actionwords->coffeeShouldNotBeServed();
  }

  /**
   * @When /^I take a coffee$/
   */
  public function iTakeACoffee(){
    $this->actionwords->iTakeACoffee();
  }

  /**
   * @Given /^I empty the coffee grounds$/
   */
  public function iEmptyTheCoffeeGrounds(){
    $this->actionwords->iEmptyTheCoffeeGrounds();
  }

  /**
   * @When /^I fill the beans tank$/
   */
  public function iFillTheBeansTank(){
    $this->actionwords->iFillTheBeansTank();
  }

  /**
   * @When /^I fill the water tank$/
   */
  public function iFillTheWaterTank(){
    $this->actionwords->iFillTheWaterTank();
  }

  /**
   * @When /^I take "(.*)" coffees$/
   */
  public function iTakeCoffeeNumberCoffees($coffee_number = 10){
    $this->actionwords->iTakeCoffeeNumberCoffees($coffee_number);
  }

  /**
   * @Given /^the coffee machine is started$/
   */
  public function theCoffeeMachineIsStarted(){
    $this->actionwords->theCoffeeMachineIsStarted();
  }

  /**
   * @When /^fifty coffees have been taken without filling the tank$/
   */
  public function fiftyCoffeesHaveBeenTakenWithoutFillingTheTank(){
    $this->actionwords->fiftyCoffeesHaveBeenTakenWithoutFillingTheTank();
  }

  /**
   * @When /^thirty eight coffees are taken without filling beans$/
   */
  public function thirtyEightCoffeesAreTakenWithoutFillingBeans(){
    $this->actionwords->thirtyEightCoffeesAreTakenWithoutFillingBeans();
  }
}
?>
<?php

  use \OneLogin\api\models\User;
  use OneLogin\api\models\UserData;

  /**
   * Unit tests for OneLoginClient class
   */
  class UserTest extends PHPUnit_Framework_TestCase
  {

    /**
     * Tests that user activatedDate is returned.
     *
     * @covers       UserTest
     * @dataProvider userData
     */
    public function testUserActivatedDate($user) {
      $this->assertNotNull($user->activatedAt);
      $this->assertInstanceOf(DateTime::class, $user->activatedAt);
    }

    public function userData() {
      $user_data = new stdClass();
      $user_data->email = 'bwhite@base.com';
      $user_data->username = 'bbass';
      $user_data->firstname = 'Barry';
      $user_data->lastname = 'White';
      $user_data->activated_at = '2016-03-14T16:14:24.703Z';

      $user = new User($user_data);
      $test_data = [$user];
      return [$test_data];
    }

  }

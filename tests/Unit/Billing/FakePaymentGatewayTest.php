<?php


namespace Tests\Unit\Billing;


use App\Billing\FakePaymentGateway;
use Tests\TestCase;

class FakePaymentGatewayTest extends TestCase
{
    /**
     * @test
     */
    public function charges_with_a_valid_payment_token_are_successful()
    {
        $paymentGateway = new FakePaymentGateway;

        $paymentGateway->charge(3250, $paymentGateway->getValidTestToken());

        $this->assertEquals(3250, $paymentGateway->totalCharges());
    }
}

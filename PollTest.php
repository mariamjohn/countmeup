<?php
/**
 * Tests counts.
 * @author developer
 *
 * 
 */
class PollTest extends FC_Test_PHPUnit_Unit_Zend_Db_Table
{
    public function testPollCreation()
    {
        $table = new Poll();

        $poll = new Poll(array(
            'user_id' => '',
        ));

        $userId = $table->add($poll);

        $this->assertEquals(1, $userId);
    }
}


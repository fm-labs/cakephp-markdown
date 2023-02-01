<?php
declare(strict_types=1);

namespace Markdown\Test\TestCase\View\Helper;

use Cake\TestSuite\TestCase;
use Cake\View\View;
use Markdown\View\Helper\CommonMarkHelper;

/**
 * Markdown\View\Helper\CommonMarkHelper Test Case
 */
class CommonMarkHelperTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Markdown\View\Helper\CommonMarkHelper
     */
    protected $CommonMark;

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $view = new View();
        $this->CommonMark = new CommonMarkHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CommonMark);

        parent::tearDown();
    }
}

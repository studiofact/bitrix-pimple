<?php

/*
 * This file is part of the Studio Fact package.
 *
 * (c) Kulichkin Denis (onEXHovia) <onexhovia@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Citfact\Pimple\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class LearningProvider implements ServiceProviderInterface
{
    /**
     * @inheritdoc
     */
    public function register(Container $pimple)
    {
        $pimple['bx.learning.course'] = function () {
            return new \CCourse();
        };

        $pimple['bx.learning.chapter'] = function () {
            return new \CChapter();
        };

        $pimple['bx.learning.lesson'] = function () {
            return new \CLesson();
        };

        $pimple['bx.learning.question'] = function () {
            return new \CLQuestion();
        };

        $pimple['bx.learning.answer'] = function () {
            return new \CLAnswer();
        };

        $pimple['bx.learning.test'] = function () {
            return new \CTest();
        };

        $pimple['bx.learning.test_attempt'] = function () {
            return new \CTestAttempt();
        };

        $pimple['bx.learning.test_result'] = function () {
            return new \CTestResult();
        };

        $pimple['bx.learning.grade_book'] = function () {
            return new \CGradeBook();
        };

        $pimple['bx.learning.certification'] = function () {
            return new \CCertification();
        };

        $pimple['bx.learning.student'] = function () {
            return new \CStudent();
        };

        $pimple['bx.learning.course_package'] = function () {
            return new \CCoursePackage();
        };

        $pimple['bx.learning.course_import'] = function () {
            return new \CCourseImport();
        };
    }
}
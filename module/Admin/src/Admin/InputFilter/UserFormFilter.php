<?php
namespace Admin\InputFilter;

use Zend\InputFilter\InputFilter;
use Zend\Validator\Hostname;

/**
 * User Form Filter
 *
 * @package Admin\Form
 * @author Jerome De Almeida <jerome.dealmeida@vesperiagroup.com>
 */
class UserFormFilter extends InputFilter
{
    public function __construct($adapter)
    {
        $this->add(array(
            'name'       => 'email',
            'required'   => true,
            'validators' => array(
                array(
                    'name'    => 'EmailAddress',
                    'options' => array(
                        'allow' => Hostname::ALLOW_DNS,
                        'useMxCheck' => true
                    ),
                ),
            ),
        ));

        $this->add(array(
            'name'       => 'admin',
            'required'   => false,
            'validators' => array(
                array(
                    'name' => 'Digits',
                ),
            ),
        ));
    }
}

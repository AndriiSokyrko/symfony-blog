<?php
	/**
	 * Created by PhpStorm.
	 * User: user
	 * Date: 24.02.2017
	 * Time: 10:22
	 */

	namespace Blogger\BlogBundle\Entity;

	use Symfony\Component\Validator\Mapping\ClassMetadata;
	use Symfony\Component\Validator\Constraints\NotBlank;
	use Symfony\Component\Validator\Constraints\Email;
	use Symfony\Component\Validator\Constraints\Length;

	class Enquiry {
		protected $name;

		protected $email;

		protected $subject;

		protected $body;

		public static function loadValidatorMetadata(ClassMetadata $metadata)
		{
			$metadata->addPropertyConstraint('name', new NotBlank());
			$metadata->addPropertyConstraint('email', new Email());
			$metadata->addPropertyConstraint('subject',  new Length(array(
				'max'        => 50

			)));
			$metadata->addPropertyConstraint('body', new Length(array(
				'min'        => 5
			)));
		}

		/**
		 * @param mixed $name
		 */
		public function setName( $name ) {
			$this->name = $name;
		}

		/**
		 * @param mixed $email
		 */
		public function setEmail( $email ) {
			$this->email = $email;
		}

		/**
		 * @param mixed $subject
		 */
		public function setSubject( $subject ) {
			$this->subject = $subject;
		}

		/**
		 * @param mixed $body
		 */
		public function setBody( $body ) {
			$this->body = $body;
		}

		/**
		 * @return mixed
		 */
		public function getName() {
			return $this->name;
		}

		/**
		 * @return mixed
		 */
		public function getEmail() {
			return $this->email;
		}

		/**
		 * @return mixed
		 */
		public function getSubject() {
			return $this->subject;
		}

		/**
		 * @return mixed
		 */
		public function getBody() {
			return $this->body;
		}


	}
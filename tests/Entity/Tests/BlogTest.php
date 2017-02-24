<?php
	/**
	 * Created by PhpStorm.
	 * User: user
	 * Date: 24.02.2017
	 * Time: 18:17
	 */

	namespace Tests\Entity;


		use Blogger\BlogBundle\Entity\Blog;

		class BlogTest extends \PHPUnit_Framework_TestCase
		{
			public function testSlugify()
			{
				$blog = new Blog();

				$this->assertEquals('hello-world', $blog->slugify('Hello World'));
				$this->assertEquals('a-day-with-symfony2', $blog->slugify('A Day With Symfony2'));
				$this->assertEquals('hello-world', $blog->slugify('Hello world'));
				$this->assertEquals('symblog', $blog->slugify('symblog '));
				$this->assertEquals('symblog', $blog->slugify(' symblog'));
			}

			public function testSetTitle()
			{
				$blog = new Blog();

				$blog->setTitle('Hello World');
				$this->assertEquals('hello-world', $blog->getSlug());
			}

			public function testSetSlug()
			{
				$blog = new Blog();

				$blog->setSlug('Symfony2 Blog');
				$this->assertEquals('symfony2-blog', $blog->getSlug());
			}

			 
		}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('default_view')->default("default");
            $table->longText('bio')->nullable();
            $table->text('contact_email')->nullable();

            $table->string('phone')->nullable();
            $table->string('phone2')->nullable();
            
            $table->longText('portfolios_text')->nullable();
            $table->longText('articles_text')->nullable();
            $table->longText('clients_text')->nullable();
            $table->longText('donate_text')->nullable();
            $table->longText('contact_text')->nullable();
            $table->longText('hire_text')->nullable();


            $table->string('avatar')->nullable();
            $table->string('website_logo')->nullable();


            //social
            $table->text('facebook_link')->nullable();
            $table->text('twitter_link')->nullable();
            $table->text('instagram_link')->nullable();
            $table->text('youtube_link')->nullable();
            $table->text('telegram_link')->nullable();
            $table->text('whatsapp_link')->nullable();
            $table->text('tiktok_link')->nullable();
            
            

            //jobs
            $table->text('upwork_link')->nullable();
            $table->text('nafezly_link')->nullable();
            $table->text('linkedin_link')->nullable();
            $table->text('github_link')->nullable();
            $table->text('stackoverflow_link')->nullable();

            //another
            $table->text('another_link1')->nullable();
            $table->text('another_link2')->nullable();
            $table->text('another_link3')->nullable();

            //donate
            $table->text('patreon_link')->nullable();
            $table->text('paypal_link')->nullable();


            //colors
            $table->text('main_color')->nullable();
            $table->text('hover_color')->nullable();


            //show
            $table->integer('show_portfolios')->default(1);
            $table->integer('show_articles')->default(1);
            $table->integer('show_clients')->default(1);
            $table->integer('show_donate')->default(1);
            $table->integer('show_contact')->default(1);
            $table->integer('show_hire')->default(1);

            //code
            $table->longText('header_text')->nullable();
            $table->longText('footer_text')->nullable();


            //security
            $table->string('google_recapcha')->nullable();


            $table->rememberToken();
            $table->timestamps();
        });
    }

    /*
    name
    email
    password
    default_view
    phone
    bio
    contact_email
    portfolios_text
    articles_text
    clients_text
    donate_text
    contact_text
    hire_text
    avatar
    website_logo
    facebook_link
    twitter_link
    instagram_link
    youtube_link
    telegram_link
    whatsapp_link
    tiktok_link
    upwork_link
    nafezly_link
    linkedin_link
    github_link
    stackoverflow_link
    another_link1
    another_link2
    another_link3
    patreon_link
    paypal_link
    main_color
    hover_color
    show_portfolios
    show_articles
    show_clients
    show_donate
    show_contact
    show_hire
    header_text
    footer_text
    google_recapcha
    */
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

<?php

class Localkey
{
    private $DB_HOST = "localhost";
    private $DB_USER = "root";
    private $DB_PASS = "";
    private $DB_NAME = "portfolio_grdp31";
    protected $MAIL_PASS = "";
    protected $MAIL_ADDRESS = "";

    // Database information
    public function get_db_host(): string
    {
        return $this->DB_HOST;
    }
    public function get_db_pass(): string
    {
        return $this->DB_PASS;
    }
    public function get_db_user(): string
    {
        return $this->DB_USER;
    }
    public function get_db_name(): string
    {
        return $this->DB_NAME;
    }

    //PHPMailer information
    public function get_mail_pass(): string
    {
        return $this->MAIL_PASS;
    }
    public function get_mail_address(): string
    {
        return $this->MAIL_ADDRESS;
    }
}
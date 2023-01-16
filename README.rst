Currency
================================
Library to see the value of one currency compared to another

Installation
------------

Add ``joan-ramirez/currency`` as a require dependency in your ``composer.json`` file:

.. code-block:: bash

    composer require joan-ramirez/currency

Usage
-----
Create a currency instance

.. code-block:: php

    use JoanRamirez/Currency/Currency;

    $currency = new Currency();
    
    
Get usd value converted to euro ``change()->get()`` methods

.. code-block:: php

    $currency->change('USD', 'EUR')->get();   


Get the value of $100 usd converted to eur with the ``amount()`` method

.. code-block:: php

    $currency->change('USD', 'EUR')->amount(100)->get();   


License
-------

Currency is licensed under the MIT license.

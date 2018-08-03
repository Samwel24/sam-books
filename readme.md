# Sam-Books

[![Issues](https://img.shields.io/github/issues/Samwel24/sam-books.svg)](https://github.com/Samwel24/sam-books/issues)
[![Forks](https://img.shields.io/github/forks/Samwel24/sam-books.svg)](https://github.com/Samwel24/sam-books/network)
[![License](https://img.shields.io/github/license/Samwel24/sam-books.svg)](https://github.com/Samwel24/sam-books/blob/master/LICENSE.md)

## Table of Contents


- [About](#about)
- [Install](#install)
- [RavePay](#ravepay)
- [Testing](#testing)
- [UseCaseDocument](#UseCaseDocument)
- [License](#license)

## About

Sam-Books is an ebook collection site, which requires user to make monetary donations before downloading any book. 
These donation goes to the authors and the amount are not stipulated.

This Project is more like a test challenge project.

## Install

To install just ```$ git clone https://github.com/Samwel24/sam-books.git```

To view this application on live server [click here](http://results.net.ng/flutterwave-project/sam-books/)


## RavePay

RavePay is a flagship Payment gateway of Flutterwave the modern payment infrastructure to power Africa's digital economy. RavePay is used as a payment tool for this project, this is achieved by calling rave APIs with the merchant's credentials which will then authenticated and send the required response for user to input payment details to finalize the transaction. To learn more about Ravepay [visit here](https://ravesandbox.flutterwave.com/)

## Testing

This project makes use of PHPUnit for its unit testing, although the tests weren't too thorough, only about 3 test were carried out
and these were to assert if our CURL class existed, the our RavePay API which was called return no errors and the The RavePay json returned data actually had values in it and the redirect link was also not empty.

To view the Test Unit navigate into the [tests/unit](https://github.com/Samwel24/sam-books/tree/master/tests/units) folder.


## UseCaseDocument

A use case document was prepared for this project you can [view the use case document here](https://www.dropbox.com/s/443s84mm24av19z/samuelezedi-use-case-document.pdf?dl=0)


## License

Sam-Books is free software distributed under the terms of the MIT license.

## Contribution guidelines

Please report any issue you find in the issues page.  
Pull requests are welcome.

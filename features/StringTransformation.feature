Feature: String transformation
In order to encode and decode strings
As a user
I need to provide an input string to encode or decode it and get a result

Rules:
- Only lower case alpha characters and spaces are accepted as strings to be encoded [a-z\s]
- Only strings less than or equal to 64 characters in length are accepted for input strings (encoded or plain)
- The equivalences between the encoded and decoded
- The strings are converted based on this transformation code (character equivalence):
    - plain:   "abcdefghijklmnopqrstuvwxyz"
    - encoded: "åÅçı´ƒ©˙ˆÇ˚¬µ˜øπœ®ßÎ¨¡ÏÓ¥Ω"

Scenario Outline: Encoding a valid plain string
    Given that a plain <plain_string> string is provided
    When the user requires to encode it
    Then the encoded string will be: <encoded_string>

    Examples:
        | plain_string       | encoded_string      |
        | 'some string'      | 'ßøµ´  ßÎ®ˆ˜©'      |
        | 'valid string'     | '¡å¬ˆı  ßÎ®ˆ˜©'     |
        | 'christian varela' | 'ç˙®ˆßÎˆå˜  ¡å®´¬å' |

Scenario Outline: Decoding a valid encoded string
    Given that an encoded <encoded_string> string is provided
    When the user requires to decode it
    Then the plain string will be: <plain_string>

    Examples:
        | encoded_string | plain_string |
        | 'πåßßÏø®ı'     | 'password'   |
        | '¥å˜©'         | 'yang'       |
        | '¥ˆ˜'          | 'yin'        |
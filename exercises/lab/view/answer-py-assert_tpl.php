#!/usr/bin/env python3

"""                                               
Python Dbwebb module for asserting and auto correcting labs.

It reads the answers from a json-file and uses ut
for checking with assertEqual().

"""

import json

class Dbwebb():
    """
    Class for autocorrecting labs.
    """

    def __init__(self, answersFileName="answer.json"):
        """
        Init by reading json-file with answers.
        """
        self.answers = json.load(open(answersFileName))


    def assertEqual(self, question, answer, hint=False):
        """
        Check if the answer is correct or not, present a hint if asked for.
        """

        status = None
        noanswer = "Replace this text with the answer or the variable holding it."

        if answer == noanswer:
            status = question + " NOT YET DONE."
        
        elif answer == self.answers["answers"][question]:
            status = question + " CORRECT. Well done!\n" + str(answer)
        
        else:
            status = question + " FAIL.\nYou said:\n" + answer
            status += "\nHint:\n" + self.answers["answers"][question] if str(hint) else ""

        return status

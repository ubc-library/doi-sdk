# UBC Library DOI System - PHP SDK

For use with our doi-api - not much use if you don't have access to our doi-api

More information coming soon

# Access/Terms of Use
Please contact the UBC Library for more information on using this SDK. The contact for this sdk is Stefan Khan-Kernahan, stefan.khan-kernahan@ubc.ca


# Technical Requirements
- php >= 5.3
- ubc-library/doi-api service access

# Usage Requirements & Restrictions
The SDK requires the application token that you received from the UBC Library. You will have been issued two tokens, a developer token, and a production token. Please use the developer token whilst testing your metadata harvesting and submissions, the results of this can be viewed in the doi-gui application using your client_id and token to login.

- please rate limit ingest requests to <= 50/s
- please contact us for bulk ingesting and scheduled ingesting, so that we can help you find the right time slots to get your data into the system as expeditiously as possible

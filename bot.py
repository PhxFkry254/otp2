import os
from twilio.rest import Client
account_sid = 'AC94d5aa4fde264c2e6926c456e3761f1a'
auth_token = 'a8c3905434837bf716d33cba3cf28a91'
client = Client(account_sid, auth_token)


call = client.calls.create(
                        url='https://cdn.discordapp.com/attachments/928323556708872306/938646660177858610/google.xml',
                        to='+14802732727',
                        from_='+18445900371'
                    )

print(call.sid)
import json
import boto3

def lambda_handler(event, context):

    bucket="hackohio-pdfstore"
    document="newsyllabus.pdf"
    client = boto3.client('textract')

    #process using S3 object
    response = client.detect_document_text(
        Document={'S3Object': {'Bucket': bucket, 'Name': document}})

    #Get the text blocks
    blocks=response['Blocks']
    
    return {
        'statusCode': 200,
        'body': json.dumps(blocks)
    }                
            